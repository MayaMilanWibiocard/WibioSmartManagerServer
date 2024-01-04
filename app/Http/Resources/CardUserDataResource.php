<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CardUserDataResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {       
        return [
            'Category'  => $this->Category,
            'Type'      => $this->Type,
            'Key'       => $this->Key, 
            'Name'      => $this->Name,
            'Length'    => $this->Length,
            'Padding'   => $this->Padding,
            'Value'     => $this->Value, 
        ];
    }
}
