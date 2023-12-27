<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\ResponseRulesResource;
class ResponseResource extends JsonResource
{
    protected $preserveKeys = true;
    
    public function toArray(Request $request): array
    {
        $resp = $this->responseRules;
        foreach($resp as $id => $row)
            foreach($row as $key => $value){
                $resp[$id][$key] = json_decode(json_encode($value, JSON_FORCE_OBJECT | JSON_UNESCAPED_UNICODE));
        }
        return [
            'ResponseRules' => $resp,
            'LeftPadding' =>  $this->leftPadding,
            'RightPadding' => $this->rightPadding,
            'IsBigEndian' => $this->isBigEndian,
        ];
    }
}


