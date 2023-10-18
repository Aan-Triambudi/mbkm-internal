<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswa')->insert([
            'nim' => '123456',
            'angkatan' => 2020,
            'email' => 'mahasiswa@example.com',
            'notelp' => '987654321',
            'id_prodi' => 1, // ID prodi dari tabel prodi
            'id_user' => 1, // ID user dari tabel users
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Menambahkan data mahasiswa lainnya
         DB::table('mahasiswa')->insert([
             'nim' => '654321',
             'angkatan' => 2021,
             'email' => 'mahasiswa2@example.com',
             'notelp' => '123456789',
             'id_prodi' => 2, // ID prodi dari tabel prodi
             'id_user' => 2, // ID user dari tabel users
             'created_at' => now(),
             'updated_at' => now(),
         ]);

    }
}