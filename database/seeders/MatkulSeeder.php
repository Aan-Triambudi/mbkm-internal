<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MatkulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('matkul')->insert([
            'nama' => 'Matematika Dasar', // Ganti dengan nama mata kuliah yang sesuai
            'kode_matakuliah' => 'MAT101', // Ganti dengan kode mata kuliah yang sesuai
            'sks' => 3, // Ganti dengan jumlah SKS mata kuliah yang sesuai
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Menambahkan lebih banyak data matkul jika diperlukan
         DB::table('matkul')->insert([
             'nama' => 'Nama Mata Kuliah', // Ganti dengan nama mata kuliah yang sesuai
             'kode_matakuliah' => 'KodeMK123', // Ganti dengan kode mata kuliah yang sesuai
             'sks' => 4, // Ganti dengan jumlah SKS mata kuliah yang sesuai
             'created_at' => now(),
             'updated_at' => now(),
         ]);
    }
}