<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NilaiKonversiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nilai_konversi')->insert([
            'nilai_angka' => 85, // Ganti dengan nilai angka yang sesuai
            'nilai_huruf' => 'A', // Ganti dengan nilai huruf yang sesuai
            'validasi_kaprodi' => 'setuju', // Ganti dengan validasi kaprodi yang sesuai
            'id_mahasiswa' => 1, // Ganti dengan ID mahasiswa yang sesuai
            'id_matkul' => 1, // Ganti dengan ID matkul yang sesuai
            'id_lowongan' => 1, // Ganti dengan ID lowongan yang sesuai
            'id_nilai_magang_ext' => 1, // Ganti dengan ID nilai_magang_ext yang sesuai
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Menambahkan lebih banyak data nilai_konversi jika diperlukan
         DB::table('nilai_konversi')->insert([
             'nilai_angka' => 75, // Ganti dengan nilai angka yang sesuai
             'nilai_huruf' => 'B', // Ganti dengan nilai huruf yang sesuai
             'validasi_kaprodi' => 'setuju', // Ganti dengan validasi kaprodi yang sesuai
             'id_mahasiswa' => 2, // Ganti dengan ID mahasiswa yang sesuai
             'id_matkul' => 2, // Ganti dengan ID matkul yang sesuai
             'id_lowongan' => 2, // Ganti dengan ID lowongan yang sesuai
             'id_nilai_magang_ext' => 2, // Ganti dengan ID nilai_magang_ext yang sesuai
             'created_at' => now(),
             'updated_at' => now(),
         ]);
    }
}