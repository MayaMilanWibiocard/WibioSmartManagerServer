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
        Schema::create('apdu_response_codes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('card_id')->default(0);
            $table->string('responseCode', 6);
            $table->string('responseText', 1024);
            $table->string('responseLang', 5)->default('EN-en');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apdu_response_codes');
    }
};
