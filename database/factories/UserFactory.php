<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Tambahkan beberapa data dummy ke tabel users
        User::insert([
            [
                'name' => 'Alice',
                'email' => 'alice@example.com',
                'password' => bcrypt('password123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bob',
                'email' => 'bob@example.com',
                'password' => bcrypt('password123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Charlie',
                'email' => 'charlie@example.com',
                'password' => bcrypt('password123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
