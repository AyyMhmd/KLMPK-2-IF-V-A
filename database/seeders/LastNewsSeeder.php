<?php

use App\Models\LastNews;
use Illuminate\Database\Seeder;

class LastNewsSeeder extends Seeder
{
    public function run()
    {
        LastNews::create([
            'judul' => 'Berita Terkini 1',
            'konten' => 'Ini adalah konten berita terkini yang pertama.',
            'gambar' => 'berita1.jpg',
            'tanggal' => now(),
        ]);

        LastNews::create([
            'judul' => 'Berita Terkini 2',
            'konten' => 'Ini adalah konten berita terkini yang kedua.',
            'gambar' => 'berita2.jpg',
            'tanggal' => now(),
        ]);
    }
}

