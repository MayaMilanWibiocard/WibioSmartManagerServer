<?php

namespace App\Models;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class CardApdu extends Pivot
{
    use HasFactory;
    use Cachable;
    
    protected $table = 'card_apdus';
}
