<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Kolom ID otomatis
            $table->string('name'); // Kolom nama pengguna
            $table->string('email')->unique(); // Kolom email pengguna, harus unik
            $table->string('password'); // Kolom password yang sudah di-hash
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
