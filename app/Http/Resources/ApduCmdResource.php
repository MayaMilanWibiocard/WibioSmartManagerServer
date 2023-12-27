<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ApduCmdResource extends JsonResource
{
    protected $preserveKeys = true;
    
    public function toArray(Request $request): array
    {
        return parent::toArray($request);
    }
}
