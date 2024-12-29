<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fakultas extends Model
{
    use HasFactory;

    protected $table = 'fakultas'; // Nama tabel di database

    protected $fillable = [
        'nama_fakultas',
        'penjelasan',
        'gambar',
    ];
}
