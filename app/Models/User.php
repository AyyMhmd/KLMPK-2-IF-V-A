<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'password'];

    // Relasi One-to-One ke Mahasiswa
    public function mahasiswa()
    {
        return $this->hasOne(Mahasiswa::class);
    }
}
