<?php

namespace App\Models;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ApduSequences extends Model
{
    use HasFactory;
    use Cachable;
    
    protected $with = ['commands'];

    public function commands(): HasMany
    {
        return $this->hasMany(ApduCommand::class, 'id', 'apdu_command_id');
    }
}
