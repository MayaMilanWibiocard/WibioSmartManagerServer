<?php

namespace App\Models;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApduResponse extends Model
{
    use HasFactory;
    use Cachable;

    protected $casts = [
        'responseRules' => 'array',
    ];
}
