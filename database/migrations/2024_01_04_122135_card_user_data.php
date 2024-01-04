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
        Schema::create('card_user_data', function (Blueprint $table) {
            $table->id();
            $table->string('Category');
            $table->string('Type');
            $table->string('Key');
            $table->string('Name');
            $table->integer('Length');
            $table->string('Padding', 2)->nullable();
            $table->string('Value')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('card_user_data');
    }
};
