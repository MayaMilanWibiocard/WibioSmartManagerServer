<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DesktopSecretKeys extends Model
{
    use HasFactory;

    protected $fillable = [
        'macAddress',
        'userEmail',
    ];

    protected $hidden = [
        'oneShotSecretKey',
    ];

    protected $casts = [
        'oneShotSecretKey' => 'hashed',
    ];
}
