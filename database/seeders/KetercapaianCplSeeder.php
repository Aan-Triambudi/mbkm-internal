<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KetercapaianCplSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ketercapaian_cpl')->insert([
            'id_mahasiswa' => 1, // Ganti dengan ID mahasiswa yang sesuai
            'id_program_magang' => 3, // Ganti dengan ID program magang yang sesuai
            'id_cpl' => 1, // Ganti dengan ID cpl yang sesuai
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Menambahkan lebih banyak data ketercapaian_cpl jika diperlukan
         DB::table('ketercapaian_cpl')->insert([
             'id_mahasiswa' => 2, // Ganti dengan ID mahasiswa yang sesuai
             'id_program_magang' => 4, // Ganti dengan ID program magang yang sesuai
             'id_cpl' => 2, // Ganti dengan ID cpl yang sesuai
             'created_at' => now(),
             'updated_at' => now(),
         ]);
    }
}