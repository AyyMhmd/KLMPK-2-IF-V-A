<?php

namespace Database\Seeders;

use App\Models\User;

use App\Models\Artikels;
use App\Models\PrestasiMahasiswa;
use App\Models\Mahasiswa;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Artikels::factory(1000)->create();
        for ($i=0; $i < 10; $i++) {
            $mhs = Mahasiswa::factory()->create();
            PrestasiMahasiswa::factory()->create([
                'nama_prestasi' => fake()->name(),
            'mahasiswa_id' => $mhs->id,
            ]);
        }
    }
}
