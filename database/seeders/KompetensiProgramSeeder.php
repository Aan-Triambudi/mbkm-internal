<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KompetensiProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kompetensi_program')->insert([
            'id_program_magang' => 3, // Ganti dengan ID program_magang yang sesuai
            'id_kompetensi_lowongan' => 1, // Ganti dengan ID kompetensi_lowongan yang sesuai
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Menambahkan lebih banyak data kompetensi_program jika diperlukan
         DB::table('kompetensi_program')->insert([
             'id_program_magang' => 4, // Ganti dengan ID program_magang yang sesuai
             'id_kompetensi_lowongan' => 2, // Ganti dengan ID kompetensi_lowongan yang sesuai
             'created_at' => now(),
             'updated_at' => now(),
         ]);
    }
}