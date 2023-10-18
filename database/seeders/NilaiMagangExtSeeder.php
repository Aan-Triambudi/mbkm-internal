<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NilaiMagangExtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nilai_magang_ext')->insert([
            'id_mahasiswa' => 1, // Ganti dengan ID mahasiswa yang sesuai
            'id_magang_ext' => 1, // Ganti dengan ID magang_ext yang sesuai
            'id_periode' => 1, // Ganti dengan ID periode yang sesuai
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Menambahkan lebih banyak data nilai_magang_ext jika diperlukan
         DB::table('nilai_magang_ext')->insert([
             'id_mahasiswa' => 2, // Ganti dengan ID mahasiswa yang sesuai
             'id_magang_ext' => 2, // Ganti dengan ID magang_ext yang sesuai
             'id_periode' => 2, // Ganti dengan ID periode yang sesuai
             'created_at' => now(),
             'updated_at' => now(),
         ]);
    }
}