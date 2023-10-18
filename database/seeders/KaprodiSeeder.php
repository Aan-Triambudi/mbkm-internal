<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KaprodiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kaprodi')->insert([
            'periode_mulai' => now(),
            'periode_akhir' => now()->addYear(), // Contoh: periode berlangsung selama 1 tahun dari sekarang
            'status' => 'aktif',
            'id_dosen' => 1, // Ganti dengan ID dosen yang sesuai
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Menambahkan lebih banyak data kaprodi jika diperlukan
         DB::table('kaprodi')->insert([
             'periode_mulai' => now(),
             'periode_akhir' => now()->addYear(),
             'status' => 'aktif',
             'id_dosen' => 2, // Ganti dengan ID dosen yang sesuai
             'created_at' => now(),
             'updated_at' => now(),
         ]);
    }
}