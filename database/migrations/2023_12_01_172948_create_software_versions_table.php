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
        Schema::create('software_versions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('version');
            $table->string('description')->nullable();
            $table->string('url')->nullable();
            $table->string('changelog')->nullable();
            $table->string('checksum')->nullable();
            $table->string('checksum_type')->nullable();
            $table->string('checksum_url')->nullable();
            $table->string('checksum_url_type')->nullable();
            $table->boolean('is_stable')->default(false);
            $table->boolean('is_public')->default(false);
            $table->boolean('is_deprecated')->default(false);
            $table->boolean('is_unsupported')->default(false);
            $table->boolean('is_demo')->default(false);
            $table->boolean('is_free')->default(false);
            $table->boolean('is_paid')->default(false);
            $table->boolean('is_premium')->default(false);
            $table->boolean('is_trial')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('software_versions');
    }
};
