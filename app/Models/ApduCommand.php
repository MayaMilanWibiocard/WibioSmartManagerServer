<?php

namespace App\Models;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ApduCommand extends Model
{
    use HasFactory;
    use Cachable;
    
    protected $with = [
                        'response:card_id,apdu_command_id,responseRules,leftPadding,rightPadding,isBigEndian', 
                        'component:card_id,apdu_command_id,component',
                        'apdus:card_id,apdu_command_id,channel,crc'
                    ];

    public function cards(): BelongsToMany
    {
        return $this->belongsToMany(Card::class, 'card_apdus');
    }  

    public function card_sequences(): BelongsToMany
    {
        return $this->belongsToMany(Card::class, 'apdu_sequences');
    }    
    
    public function response(): HasOne
    {
        return $this->hasOne(ApduResponse::class);
    }  

    public function component(): HasOne
    {
        return $this->hasOne(ApduComponent::class);
    }

    public function apdus(): HasMany
    {
        return $this->hasMany(CardApdu::class)->select('channel AS ca_channel', 'crc AS ca_crc');
    }

}
