<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PendampingLapangMahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
                // Menyisipkan data ke tabel pendamping_lapang_mahasiswa
                DB::table('pendamping_lapang_mahasiswa')->insert([
                    'id_dosen' => 1, // Ganti dengan ID dosen yang sesuai
                    'id_mahasiswa' => 1, // Ganti dengan ID mahasiswa yang sesuai
                    'id_pl_mitra' => 1, // Ganti dengan ID pl_mitra yang sesuai
                    'id_lowongan' => 1, // Ganti dengan ID lowongan yang sesuai
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                // Menambahkan data pendamping_lapang_mahasiswa lainnya
                 DB::table('pendamping_lapang_mahasiswa')->insert([
                     'id_dosen' => 2, // Ganti dengan ID dosen yang sesuai
                     'id_mahasiswa' => 2, // Ganti dengan ID mahasiswa yang sesuai
                     'id_pl_mitra' => 2, // Ganti dengan ID pl_mitra yang sesuai
                     'id_lowongan' => 2, // Ganti dengan ID lowongan yang sesuai
                     'created_at' => now(),
                     'updated_at' => now(),
                 ]);

    }
}