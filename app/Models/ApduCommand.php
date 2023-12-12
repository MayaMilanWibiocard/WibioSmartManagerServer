<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ApduCommand extends Model
{
    use HasFactory;
    protected $with = [
                        'response:card_id,apdu_command_id,responseRules,leftPadding,rightPadding,isBigEndian', 
                        'component:card_id,apdu_command_id,component',
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
}
