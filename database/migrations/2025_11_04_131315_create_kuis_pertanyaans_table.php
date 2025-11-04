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
        Schema::create('kuis_pertanyaans', function (Blueprint $table) {
            $table->id('pertanyaan_id');
            $table->foreignId('kuis_id')->constrained('kuis', 'kuis_id');
            $table->text('pertanyaan');
            $table->string('jawaban_benar');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kuis_pertanyaans');
    }
};
