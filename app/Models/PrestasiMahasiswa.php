<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrestasiMahasiswa extends Model
{
    use HasFactory;

    protected $table = 'prestasi_mahasiswa'; // Nama tabel

    protected $primaryKey = 'id'; // Primary key

    protected $fillable = [
        'mahasiswa_id',
        'nama_prestasi',
        'tingkat',
        'tahun',
        'keterangan',
    ];

    /**
     * Relasi ke tabel mahasiswa.
     */
    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'mahasiswa_id');
    }
}
