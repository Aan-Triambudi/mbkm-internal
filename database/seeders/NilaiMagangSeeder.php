<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NilaiMagangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nilai_magang')->insert([
            'nilai_angka' => 85,
            'nilai_huruf' => 'A',
            'id_mahasiswa' => 1, // Ganti dengan ID mahasiswa yang sesuai
            'id_kompetensi_program' => 4, // Ganti dengan ID kompetensi_program yang sesuai
            'created_at' => now(),
            'updated_at' => now(),
        ]);


         DB::table('nilai_magang')->insert([
             'nilai_angka' => 78,
             'nilai_huruf' => 'B',
             'id_mahasiswa' => 2, // Ganti dengan ID mahasiswa yang sesuai
             'id_kompetensi_program' => 5, // Ganti dengan ID kompetensi_program yang sesuai
             'created_at' => now(),
             'updated_at' => now(),
         ]);
    }
}