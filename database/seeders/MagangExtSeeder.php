<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MagangExtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Menyisipkan data ke dalam tabel magang_ext
         DB::table('magang_ext')->insert([
            'nama' => 'Nama Magang External 1', // Ganti dengan nama magang external yang sesuai
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Menambahkan lebih banyak data magang_ext jika diperlukan
         DB::table('magang_ext')->insert([
             'nama' => 'Nama Magang External 2', // Ganti dengan nama magang external yang sesuai
             'created_at' => now(),
             'updated_at' => now(),
         ]);
    }
}