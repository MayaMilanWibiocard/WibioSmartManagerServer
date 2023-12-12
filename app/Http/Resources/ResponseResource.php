<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ResponseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'responseRules' => $this->responseRules,
            'leftPadding' =>  $this->leftPadding,
            'rightPadding' => $this->rightPadding,
            'isBigEndian' => $this->isBigEndian,
        ];
    }
}
