<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Card;
use App\Models\ApduResponseCodes;
use App\Http\Resources\CommandResource;
use App\Http\Resources\SequenceResource;

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
        
        $commands = $card->commands;

        if ($commands)
        {
            return response()->json([
                "status" => "success",
                "message" => "Card commands",
                "commands" => CommandResource::collection($commands)
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
            })->get();
        if ($commands)
        {
            return response()->json([
                "status" => "success",
                "message" => "Card commands",
                "commands" => SequenceResource::collection($commands)
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

    public function CommandGenerate($id, $cardVersion, $appletVersion, $channel, $sequenceName, $data)
    {
        $card = Card::where("id", $id)
            ->where("card_version", $cardVersion)
            ->where("card_applet_version", $appletVersion)
            ->first();
        $command = $card
            ->with(['commands' => function ($query) use ($sequenceName) {
                $query->where('apdu_sequences.sequence', $sequenceName)
                    ->where('apdu_sequences.channel', $channel);
            }])
            ->whereHas('commands', function ($query) use ($sequenceName, $channel) {
                $query->where('apdu_sequences.sequence', $sequenceName)
                    ->where('apdu_sequences.channel', $channel);
            })->first();
        if ($command)
        {

        }
    }
}
