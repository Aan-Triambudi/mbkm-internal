<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nama' => 'Admin',
            'email' => 'admin@example.com',
            'username' => 'admin',
            'password' => bcrypt('password'),
        ]);

        // Tambahkan 4 data user lainnya jika diperlukan
        User::create([
            'nama' => 'User 1',
            'email' => 'user1@example.com',
            'username' => 'user1',
            'password' => bcrypt('password'),
        ]);
    }
}