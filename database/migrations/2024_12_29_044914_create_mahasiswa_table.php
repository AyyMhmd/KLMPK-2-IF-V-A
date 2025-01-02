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
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id('id'); // Kolom ID sebagai primary key
            $table->string('nama'); // Kolom untuk nama mahasiswa
            $table->string('nim')->unique(); // Kolom untuk NIM mahasiswa, pastikan NIM unik
            $table->string('email')->nullable(); // Kolom untuk email, nullable jika tidak wajib
            $table->date('tanggal_lahir')->nullable(); // Kolom untuk tanggal lahir, nullable jika tidak wajib
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswa');
    }
};
