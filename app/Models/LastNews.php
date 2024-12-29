<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LastNews extends Model
{
    use HasFactory;

    // Jika nama tabel berbeda dari model, tentukan nama tabelnya
    protected $table = 'last_news';

    // Kolom yang dapat diisi massal (mass assignable)
    protected $fillable = [
        'judul',
        'konten',
        'gambar',
        'tanggal',
    ];
}
