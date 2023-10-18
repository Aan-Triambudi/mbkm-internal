<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KompetensiLowonganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kompetensi_lowongan')->insert([
            'kompetensi' => 'Penguasaan Bahasa Inggris',
            'id_lowongan' => 1, // Ganti dengan ID lowongan yang sesuai
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Menambahkan data kompetensi lowongan lainnya
         DB::table('kompetensi_lowongan')->insert([
             'kompetensi' => 'Keterampilan Komunikasi',
             'id_lowongan' => 2, // Ganti dengan ID lowongan yang sesuai
             'created_at' => now(),
             'updated_at' => now(),
         ]);
    }
}