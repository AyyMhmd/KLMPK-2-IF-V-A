<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Jalankan migrasi.
     */
    public function up()
    {
        Schema::create('last_news', function (Blueprint $table) {
            $table->id('id'); // Kolom ID sebagai primary key
            $table->string('judul'); // Kolom untuk judul berita
            $table->text('konten'); // Kolom untuk konten berita
            $table->string('gambar')->nullable(); // Kolom untuk gambar berita (nullable)
            $table->timestamp('tanggal')->nullable(); // Kolom untuk tanggal berita
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Batalkan migrasi.
     */
    public function down()
    {
        Schema::dropIfExists('last_news'); // Menghapus tabel last_news jika rollback dilakukan
    }
};
