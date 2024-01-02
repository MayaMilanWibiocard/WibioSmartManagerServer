<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

use App\Models\CardApdu;

use App\Http\Resources\ResponseResource;
use App\Http\Resources\ApduCmdResource;

use App\Helpers\Cryptography;

class CommandResource extends JsonResource
{
    
    public function toArray(Request $request): array
    {
        $channelCrc = $this->apdus->where("channel",$request->channel)->first();
        if ($channelCrc) 
            $this->apdu .= Cryptography::CrcCalucator($this->apdu, $channelCrc->crc); 
        return [
            'Name' => $this->name,
            'Apdu' =>  $this->apdu ,
            'RequireData' => ($this->requireData == 0)? false : $this->component->component,
            'ResponseType' => $this->responseType,
            'ResponseDesc' => ($this->responseType == null)? null : new ResponseResource($this->response),
            'Timeout' => $this->timeout
        ];
    }
}
