<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cha_keys', function (Blueprint $table) {
            $table->id();
            $table->string('keyName');
            $table->string('keyValue');
            $table->timestamps();
        });
    }
    webserver 3409vnmdklgj4895gnfdklghy785we489tvuy48976ygnj4343423
    smdesktop 3209fdjk984ujfh3895yeruifgh534irfjnhr857349hert8756y3
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cha_keys');
    }
};
