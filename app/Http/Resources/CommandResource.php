<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

use App\Http\Resources\ResponseResource;

class CommandResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'name' => $this->name,
            'apdu' =>  $this->apdu,
            'requireData' => $this->requireData,
            'responseType' => ($this->responseType == null)? null : new ResponseResource($this->response),
            'timeout' => $this->timeout,
            'crc' => $this->crc,
        ];
    }
}
