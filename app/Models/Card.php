<?php

namespace App\Models;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Card extends Model
{
    use HasFactory;
    use Cachable;

    public function commands(): BelongsToMany
    {
        return $this->belongsToMany(ApduCommand::class, 'card_apdus');
    }

    public function commandsNFC(): BelongsToMany
    {
        return $this->belongsToMany(ApduCommand::class, 'card_apdus')->where('card_apdus.channel', 'NFC');
    }

    public function commandsBTL(): BelongsToMany
    {
        return $this->belongsToMany(ApduCommand::class, 'card_apdus')->where('card_apdus.channel', 'NFC');
    }

    public function sequences(): BelongsToMany
    {
        return $this->belongsToMany(ApduCommand::class, 'apdu_sequences');
    }

    public function responseCodes(): HasMany
    {
        return $this->hasMany(ApduResponseCodes::class);
    }
}
