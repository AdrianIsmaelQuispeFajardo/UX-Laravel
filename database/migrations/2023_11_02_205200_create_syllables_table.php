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
        Schema::create('syllables', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('idSyllable');
            $table->integer('idCourse');
            $table->integer('idPhase')->nullable();
            $table->string('Texto');
            $table->json('syllable');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('syllables');
    }
};
