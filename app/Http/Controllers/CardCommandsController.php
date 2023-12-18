<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\CommandResource;
use Symfony\Component\Uid\Ulid;
use Illuminate\Support\Str;

use App\Models\Card;
use App\Models\ChaKey;
use App\Models\CardApdu;
use App\Models\ApduConstant;
use App\Models\ApduResponseCodes;

use PBurggraf\CRC\CRC16\Genibus;
use \PBurggraf\CRC\CRC32\CRC32;

class CardCommandsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.apikey');
    }  
    

    public function getSupportedCards()
    {
        $cards = Card::distinct("ATR", "BTL_NAME")->get();
        if ($cards)
            return response()->json([
                "status" => "success",
                "message" => "Supported cards",
                "cards" => $cards
            ], 200);
        return response()->json([
            "status" => "error",
            "message" => "No supported cards"
        ], 400);
    }

    public function checkCardByAtr(string $atr)
    {
        $card = Card::where("ATR", $atr)->orWhere('BTL_NAME', $atr)->first();
        if ($card)
            return response()->json([
                "id" => $card->id,
                "status" => "success",
                "message" => "Card is valid"
            ], 200);
        return response()->json([
            "status" => "error",
            "message" => "Card is invalid"
        ], 400);
    }

    public function getResponseCodes($id, $cardVersion, $appletVersion, $lang)
    {
        $card = Card::where("id", $id)
                    ->where("card_version", $cardVersion)
                    ->where("card_applet_version", $appletVersion)
                    ->first();
        $codes = ApduResponseCodes::where("responseLang", $lang)
                                ->whereIn("card_id", [0, $id])
                                ->get();
        if ($codes)
        {
            return response()->json([
                "status" => "success",
                "message" => "Card responses",
                "responses" => $codes
            ], 200);
        }
        else
        {
            return response()->json([
                "status" => "error",
                "message" => "Card is invalid"
            ], 400);
        }   
    }

    public function getCommands($id, $cardVersion, $appletVersion)
    {
        $card = Card::where("id", $id)
                    ->where("card_version", $cardVersion)
                    ->where("card_applet_version", $appletVersion)
                    ->first();
        $cmds = $card->commands;
        if ($cmds)
            return response()->json([
                "status" => "success",
                "message" => "Card commands",
                "commands" => self::ChaChaEncoder(CommandResource::collection($cmds)->toJson()),
                "uncrypted" => (app()->hasDebugModeEnabled()) ? CommandResource::collection($cmds) : null,
            ], 200);
        return response()->json([
            "status" => "error",
            "message" => "Card is invalid"
        ], 400);
    }

    public function getSequence($id, $cardVersion, $appletVersion, $channel, $sequenceName)
    {
        $card = Card::where("id", $id)
            ->where("card_version", $cardVersion)
            ->where("card_applet_version", $appletVersion)
            ->first();
        $cmds = $card
            ->with(['sequences' => function ($query) use ($sequenceName, $channel) {
                $query->where('apdu_sequences.sequence', $sequenceName)
                    ->where('apdu_sequences.channel', $channel);
            }])
            ->whereHas('sequences', function ($query) use ($sequenceName, $channel) {
                $query->where('apdu_sequences.sequence', $sequenceName)
                    ->where('apdu_sequences.channel', $channel);
            })->first();
        if ($cmds)
            return response()->json([
                "status" => "success",
                "message" => "Card commands",
                "commands" => self::ChaChaEncoder(CommandResource::collection($cmds->sequences)->toJson()),
                "uncrypted" => (app()->hasDebugModeEnabled()) ? CommandResource::collection($cmds->sequences) : null,
            ], 200);
        return response()->json([
            "status" => "error",
            "message" => "Card is invalid"
        ], 400);
    }


    //$nonce = substr(str_replace('-', '', Str::ulid()->toRfc4122()), -SODIUM_CRYPTO_AEAD_XCHACHA20POLY1305_IETF_NPUBBYTES);
    //$key = ChaKey::where('keyName', 'desktopsecretkeys')->first();
    //$ret = sodium_crypto_aead_xchacha20poly1305_ietf_encrypt(
    //            '{"userinfo": "Maya Milan;m.milan@wibiocard.com;2024/12/31"}',
    //            $nonce,
    //            $nonce,
    //            $key->keyValue
    //        );
    //dd($nonce.base64_encode($ret));
    public function generateCommand($id, $cardVersion, $appletVersion, $channel, $command, Request $request)
    {
        $jsonData = self::ChaChaDecoder($request->data);
        $card = Card::where("id", $id)
            ->where("card_version", $cardVersion)
            ->where("card_applet_version", $appletVersion)
            ->first();
        $cmd = $card
            ->with(['commands' => function ($query) use ($channel, $command) {
                $query->where('card_apdus.channel', $channel)
                        ->where('apdu_commands.name', $command);
            }])
            ->whereHas('commands', function ($query) use ($channel, $command) {
                $query->where('card_apdus.channel', $channel)
                        ->where('apdu_commands.name', $command);
            })
            ->first();
        if ($cmd)
        {
            $apdu = strtoupper(str_replace(' ', '', $cmd->commands[0]->apdu));

            $components = $cmd->commands[0]->component->component;
            foreach ($jsonData as $key => $value)
                $components = strtoupper(str_replace('{'.$key.'}', bin2hex($value), $components));

            $constants = ApduConstant::where('card_id', $id)->get();
            foreach ($constants as $constant)
                $components = strtoupper(str_replace('['.$constant->name.']', $constant->value, $components));
            $apdu .= $components.self::CrcCalucator($components, $cmd->commands[0]->crc);

            $crcChannel = CardApdu::where('card_id', $id)
                                    ->where('apdu_command_id', $cmd->commands[0]->id)
                                    ->where('channel', $channel)
                                    ->first()->crc;
            $apdu .= self::CrcCalucator($apdu, $crcChannel); 

            return response()->json([
                "status" => "success",
                "message" => "Card commands",
                "commands" => self::ChaChaEncoder($apdu),
                "uncrypted" => (app()->hasDebugModeEnabled()) ? trim(strrev(chunk_split(strrev(str_replace(' ', '', $apdu)),2, ' '))) : null,
            ], 200);
        }
        else
        {
            return response()->json([
                "status" => "error",
                "message" => "Card is invalid"
            ], 400);
        }    
    }

    private static function ChaChaDecoder($data)
    {
        $nonce = substr($data, 0, SODIUM_CRYPTO_AEAD_XCHACHA20POLY1305_IETF_NPUBBYTES);
        $data = base64_decode(substr($data, SODIUM_CRYPTO_AEAD_XCHACHA20POLY1305_IETF_NPUBBYTES));
        $key = ChaKey::where('keyName', 'desktopsecretkeys')->first();
        $jsonData = json_decode(
            sodium_crypto_aead_xchacha20poly1305_ietf_decrypt(
                $data,
                $nonce,
                $nonce,
                $key->keyValue
            )
        );
        return $jsonData;
    }

    private static function ChaChaEncoder($data)
    {
        $nonce = substr(str_replace('-', '', Str::ulid()->toRfc4122()), -SODIUM_CRYPTO_AEAD_XCHACHA20POLY1305_IETF_NPUBBYTES);
        $key = ChaKey::where('keyName', 'webserver')->first();
        $ret = sodium_crypto_aead_xchacha20poly1305_ietf_encrypt(
                    $data,
                    $nonce,
                    $nonce,
                    $key->keyValue
                );
        return $nonce.base64_encode($ret);        
    }

    private static function CrcCalucator($data, $crc)
    {
        if ($crc == null)
            return '';   
        switch($crc)
        {
            case 'Iso3309Crc16':
                $crc16AugCcitt = new Genibus();
                return strtoupper(dechex($crc16AugCcitt->calculate($data)));
            case 'CRC32':
                $crc32 = new CRC32();
                return strtoupper(dechex($crc32->calculate($data)));
            /// add new crc algos as requested
        }
    }


}
