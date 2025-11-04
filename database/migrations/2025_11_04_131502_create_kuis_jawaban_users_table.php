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
        Schema::create('kuis_jawaban_users', function (Blueprint $table) {
            $table->id('hasil_id');
            $table->foreignId('user_id')->constrained('users', 'user_id');
            $table->foreignId('kuis_id')->constrained('kuis','kuis_id');
            $table->integer('skor');
            $table->timestamp('waktu_selesai');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kuis_jawaban_users');
    }
};
