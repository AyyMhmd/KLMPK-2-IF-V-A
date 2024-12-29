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
        Schema::create('fakultas', function (Blueprint $table) {
            $table->id(); // Kolom ID sebagai primary key
            $table->string('nama_fakultas'); // Nama fakultas, misalnya Informatika, Teknik Industri
            $table->text('penjelasan'); // Penjelasan tentang fakultas
            $table->string('gambar')->nullable(); // Kolom untuk menyimpan path gambar fakultas (nullable)
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fakultas');
    }
};
