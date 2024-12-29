<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    protected $table = 'artikel'; // Nama tabel di database

    protected $primaryKey = 'artikel_id'; // Primary key custom

    protected $fillable = [
        'artikel', // Kolom teks artikel
        'upload_artikel', // Kolom file upload
    ];
}
