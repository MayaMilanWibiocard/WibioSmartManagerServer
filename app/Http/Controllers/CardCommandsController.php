<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Cryptography;

use App\Http\Resources\CommandResource;
use App\Http\Resources\ResponseCodesResource;

use App\Models\Card;
use App\Models\CardApdu;
use App\Models\ApduCommand;
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
        try{
            $cards = Card::distinct("ATR", "BTL_NAME")->select("ATR as Atr", "BTL_NAME as BtlName")->get();
            if ($cards)
                return response()->json([
                    "Status" => "success",
                    "Message" => "Supported cards",
                    "Cards" => $cards
                ], 200);
            return response()->json([
                "Status" => "error",
                "Message" => "No supported cards"
            ], 400);
        }
        catch(\Exception $e)
        {
            return response()->json([
                "Status" => "error",
                "Message" => (app()->hasDebugModeEnabled())?$e->getMessage():""
            ], 400);
        }
    }

    public function checkCardByAtr(string $atr)
    {
        try{
            $card = Card::where("ATR", $atr)->orWhere('BTL_NAME', $atr)->get();
            if ($card)
            {
                if ($card->count() >1)
                {
                    $card_apdu = CardApdu::where('card_id', $card->modelKeys())->pluck("apdu_command_id");
                    $cmds = ApduCommand::where('name', 'ReadVersionInfo')->whereIn('id', $card_apdu)->distinct()->get();
                }
                return response()->json([
                    "Count" => $card->count(),
                    "Id" => ($card->count() ==1) ? $card->first()->id: null,
                    "GetVersion" => ($card->count() ==1) ? null: Cryptography::ChaChaEncoder(CommandResource::collection($cmds)->toJson()),
                    "Uncrypted" => (app()->hasDebugModeEnabled() && $card->count() > 1) ? CommandResource::collection($cmds) : null,
                    "Status" => "success",
                    "Message" => "Card is valid"
                ], 200);
            }
            return response()->json([
                "Status" => "error",
                "Message" => "Card is invalid"
            ], 400);
        }
        catch(\Exception $e)
        {
            return response()->json([
                "Status" => "error",
                "Message" => (app()->hasDebugModeEnabled())?$e->getMessage():""
            ], 400);
        }
    }

    public function checkCardBySwVersions(string $atr, $cardVersion, $appletVersion)
    {
        try
        {
            $card = Card::where(function ($query) use ($atr) {
                        $query->where("ATR", $atr)
                            ->orWhere('BTL_NAME', $atr);
                    }) 
                    ->where('card_version', $cardVersion)
                    ->where('card_applet_version', $appletVersion)
                    ->first();
            if ($card)
            {
                return response()->json([
                    "Status" => "success",
                    "Message" => "Card is valid",
                    "Id" => $card->id
                ], 200);
            }
            return response()->json([
                "Status" => "error",
                "Message" => "Card is invalid"
            ], 400);
        }
        catch(\Exception $e)
        {
            return response()->json([
                "Status" => "error",
                "Message" => (app()->hasDebugModeEnabled())?$e->getMessage():""
            ], 400);
        }
    }

    public function getResponseCodes($id, $lang)
    {
        try
        {
            $card = Card::find($id);
            $codes = ApduResponseCodes::where("responseLang", $lang)
                                    ->whereIn("card_id", [0, $id])
                                    ->get();
            if ($codes)
            {
                return response()->json([
                    "Status" => "success",
                    "Message" => "Card responses",
                    "Responses" => Cryptography::ChaChaEncoder(ResponseCodesResource::collection($codes)->toJson()),
                    "Uncrypted" => (app()->hasDebugModeEnabled()) ? ResponseCodesResource::collection($codes) : null,
                ], 200);
            }
            else
            {
                return response()->json([
                    "Status" => "error",
                    "Message" => "Card is invalid"
                ], 400);
            }   
        }
        catch(\Exception $e)
        {
            return response()->json([
                "Status" => "error",
                "Message" => (app()->hasDebugModeEnabled())?$e->getMessage():""
            ], 400);
        }
    }

    public function getCommands($id)
    {
        try
        {
            $card = Card::find($id);
            $cmds = $card->commands;
            if ($cmds)
                return response()->json([
                    "Status" => "success",
                    "Message" => "Card commands",
                    "Commands" => Cryptography::ChaChaEncoder(CommandResource::collection($cmds)->toJson()),
                    "Uncrypted" => (app()->hasDebugModeEnabled()) ? CommandResource::collection($cmds) : null,
                ], 200);
            return response()->json([
                "Status" => "error",
                "Message" => "Card is invalid"
            ], 400);
        }
        catch(\Exception $e)
        {
            return response()->json([
                "Status" => "error",
                "Message" => (app()->hasDebugModeEnabled())?$e->getMessage():""
            ], 400);
        }
    }

    public function getSequence($id, $channel, $sequenceName) 
    {
        try
        {
            $card = Card::find($id);
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
                    "Status" => "success",
                    "Message" => "Card commands",
                    "Commands" => Cryptography::ChaChaEncoder(CommandResource::collection($cmds->sequences)->toJson()),
                    "Uncrypted" => (app()->hasDebugModeEnabled()) ? CommandResource::collection($cmds->sequences) : null,
                ], 200);
            return response()->json([
                "Status" => "error",
                "Message" => "Card is invalid"
            ], 400);
        }
        catch(\Exception $e)
        {
            return response()->json([
                "Status" => "error",
                "Message" => (app()->hasDebugModeEnabled())?$e->getMessage():""
            ], 400);
        }
    }


    public function generateCommand($id, $channel, $command, Request $request)
    {
        try
        {
            $jsonData = Cryptography::ChaChaDecoder($request->data);
            $card = Card::find($id);
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
                $apdu .= $components.Cryptography::CrcCalucator($components, $cmd->commands[0]->crc);

                $crcChannel = CardApdu::where('card_id', $id)
                                        ->where('apdu_command_id', $cmd->commands[0]->id)
                                        ->where('channel', $channel)
                                        ->first()->crc;
                $apdu .= Cryptography::CrcCalucator($apdu, $crcChannel); 

                return response()->json([
                    "Status" => "success",
                    "Message" => "Card commands",
                    "Commands" => Cryptography::ChaChaEncoder($apdu),
                    "Uncrypted" => (app()->hasDebugModeEnabled()) ? trim(strrev(chunk_split(strrev(str_replace(' ', '', $apdu)),2, ' '))) : null,
                ], 200);
            }
            else
            {
                return response()->json([
                    "Status" => "error",
                    "Message" => "Card is invalid"
                ], 400);
            }    
        }
        catch(\Exception $e)
        {
            return response()->json([
                "Status" => "error",
                "Message" => (app()->hasDebugModeEnabled())?$e->getMessage():""
            ], 400);
        }
    }


}
