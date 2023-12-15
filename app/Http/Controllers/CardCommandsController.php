<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\CommandResource;
use Symfony\Component\Uid\Ulid;
use Illuminate\Support\Str;

use App\Models\Card;
use App\Models\ChaKey;
use App\Models\ApduConstant;
use App\Models\ApduResponseCodes;

class CardCommandsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.apikey');
    }  
    
    public function checkCardByAtr(string $atr)
    {
        $card = Card::where("ATR", $atr)->first();
        if ($card)
        {
            return response()->json([
                "id" => $card->id,
                "status" => "success",
                "message" => "Card is valid"
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
        {
            $nonce = substr(str_replace('-', '', Str::ulid()->toRfc4122()), -SODIUM_CRYPTO_AEAD_XCHACHA20POLY1305_IETF_NPUBBYTES);
            $key = ChaKey::where('keyName', 'webserver')->first();
            $ret = sodium_crypto_aead_xchacha20poly1305_ietf_encrypt(
                        CommandResource::collection($cmds)->toJson(),
                        $nonce,
                        $nonce,
                        $key->keyValue
                    );
            return response()->json([
                "status" => "success",
                "message" => "Card commands",
                "commands" => $nonce.base64_encode($ret)
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

    public function getSequence($id, $cardVersion, $appletVersion, $channel, $sequenceName)
    {
        $card = Card::where("id", $id)
        ->where("card_version", $cardVersion)
        ->where("card_applet_version", $appletVersion)
        ->first();
        $commands = $card
            ->with(['sequences' => function ($query) use ($sequenceName, $channel) {
                $query->where('apdu_sequences.sequence', $sequenceName)
                    ->where('apdu_sequences.channel', $channel);
            }])
            ->whereHas('sequences', function ($query) use ($sequenceName, $channel) {
                $query->where('apdu_sequences.sequence', $sequenceName)
                    ->where('apdu_sequences.channel', $channel);
            })->first();
        if ($cmds)
        {
            $nonce = substr(str_replace('-', '', Str::ulid()->toRfc4122()), -SODIUM_CRYPTO_AEAD_XCHACHA20POLY1305_IETF_NPUBBYTES);
            $key = ChaKey::where('keyName', 'webserver')->first();
            $ret = sodium_crypto_aead_xchacha20poly1305_ietf_encrypt(
                        CommandResource::collection($cmds->sequences)->toJson(),
                        $nonce,
                        $nonce,
                        $key->keyValue
                    );
            return response()->json([
                "status" => "success",
                "message" => "Card commands",
                "commands" => $nonce.base64_encode($ret)
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
        $nonce = substr($request->data, 0, SODIUM_CRYPTO_AEAD_XCHACHA20POLY1305_IETF_NPUBBYTES);
        $data = base64_decode(substr($request->data, SODIUM_CRYPTO_AEAD_XCHACHA20POLY1305_IETF_NPUBBYTES));
        $key = ChaKey::where('keyName', 'desktopsecretkeys')->first();
        $jsonData = json_decode(
            sodium_crypto_aead_xchacha20poly1305_ietf_decrypt(
                $data,
                $nonce,
                $nonce,
                $key->keyValue
            )
        );
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
            $apdu = $cmd->commands[0]->apdu;
            $components = $cmd->commands[0]->component->component;
            foreach ($jsonData as $key => $value)
                $components = str_replace('{'.$key.'}', bin2hex($value), $components);
            $constants = ApduConstant::where('card_id', $id)->get();
            foreach ($constants as $constant)
                $components = str_replace('['.$constant->name.']', $constant->value, $components);
            $apdu .= $components;
            
            $nonce = substr(str_replace('-', '', Str::ulid()->toRfc4122()), -SODIUM_CRYPTO_AEAD_XCHACHA20POLY1305_IETF_NPUBBYTES);
            $key = ChaKey::where('keyName', 'webserver')->first();
            $ret = sodium_crypto_aead_xchacha20poly1305_ietf_encrypt(
                        $apdu,
                        $nonce,
                        $nonce,
                        $key->keyValue
                    );
            return response()->json([
                "status" => "success",
                "message" => "Card commands",
                "commands" => $nonce.base64_encode($ret),
                "uncrypted" => trim(strrev(chunk_split(strrev(str_replace(' ', '', $apdu)),2, ' ')))
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
}
