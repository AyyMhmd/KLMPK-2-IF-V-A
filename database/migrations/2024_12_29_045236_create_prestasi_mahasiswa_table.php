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
        Schema::create('prestasi_mahasiswa', function (Blueprint $table) {
            $table->id('prestasi_id'); // Kolom ID auto-increment sebagai primary key
            $table->unsignedBigInteger('mahasiswa_id'); // Relasi ke tabel mahasiswa
            $table->string('nama_prestasi'); // Nama prestasi
            $table->string('tingkat'); // Tingkat prestasi (misal: lokal, nasional, internasional)
            $table->string('tahun'); // Tahun perolehan prestasi
            $table->text('keterangan')->nullable(); // Keterangan tambahan
            $table->timestamps(); // Kolom created_at dan updated_at

            // Foreign key untuk relasi ke tabel mahasiswa
            $table->foreign('mahasiswa_id')->references('id')->on('mahasiswa')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prestasi_mahasiswa');
    }
};
