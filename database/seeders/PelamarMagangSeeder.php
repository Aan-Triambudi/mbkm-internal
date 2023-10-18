<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PelamarMagangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Menyisipkan data ke dalam tabel pelamar_magang
         DB::table('pelamar_magang')->insert([
            'status_diterima' => 'aktif', // Ganti dengan status diterima yang sesuai
            'id_mahasiswa' => 1, // Ganti dengan ID mahasiswa yang sesuai
            'id_lowongan' => 1, // Ganti dengan ID lowongan yang sesuai
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Menambahkan lebih banyak data pelamar_magang jika diperlukan
         DB::table('pelamar_magang')->insert([
             'status_diterima' => 'aktif', // Ganti dengan status diterima yang sesuai
             'id_mahasiswa' => 2, // Ganti dengan ID mahasiswa yang sesuai
             'id_lowongan' => 2, // Ganti dengan ID lowongan yang sesuai
             'created_at' => now(),
             'updated_at' => now(),
         ]);
    }
}