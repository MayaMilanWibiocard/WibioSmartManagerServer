<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ResponseCodesResource extends JsonResource
{
    protected $preserveKeys = true;
    
    public function toArray(Request $request): array
    {
        return [
            'ResponseCode' => $this->responseCode,
            'ResponseText' =>  $this->responseText,
        ];
    }
}
