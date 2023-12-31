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
        Schema::create('apdu_sequences', function (Blueprint $table) {
            $table->id();
            $table->string('sequence');
            $table->unsignedBigInteger('card_id');
            $table->foreign('card_id')->references('id')->on('cards');
            $table->string('channel');
            $table->unsignedBigInteger('apdu_command_id');
            $table->foreign('apdu_command_id')->references('id')->on('apdu_commands');
            $table->integer('order_of_execution');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apdu_sequences');
    }
};
