<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MahasiswaMagangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswa_magang')->insert([
            'periode_aktif' => 'Periode Aktif 1',
            'id_mahasiswa' => 1, // Ganti dengan ID mahasiswa yang sesuai
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Menambahkan data mahasiswa_magang lainnya
         DB::table('mahasiswa_magang')->insert([
             'periode_aktif' => 'Periode Aktif 2',
             'id_mahasiswa' => 2, // Ganti dengan ID mahasiswa yang sesuai
             'created_at' => now(),
             'updated_at' => now(),
         ]);
    }
}