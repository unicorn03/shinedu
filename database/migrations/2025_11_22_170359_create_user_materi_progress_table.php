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
        Schema::create('user_materi_progress', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('materi_id');
            $table->enum('status', ['in_progress', 'completed'])->default('in_progress');
            $table->timestamp('waktu_selesai')->nullable();
            $table->timestamps();
            
            $table->unique(['user_id', 'materi_id']);
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_materi_progress');
    }
};
