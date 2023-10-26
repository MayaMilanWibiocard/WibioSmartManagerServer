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
        Schema::create('desktop_secret_keys', function (Blueprint $table) {
            $table->id();
            $table->string("userEmail")->nullable();
            $table->string("macAddress", 12)->nullable();
            $table->string("oneShotSecretKey", 24);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('desktop_secret_keys');
    }
};
