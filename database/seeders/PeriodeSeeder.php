<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PeriodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('periode')->insert([
            'semester' => 1,
            'tahun' => 2023,
            'status' => 'aktif',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Menambahkan data periode lainnya
         DB::table('periode')->insert([
             'semester' => 2,
             'tahun' => 2023,
             'status' => 'aktif',
             'created_at' => now(),
             'updated_at' => now(),
         ]);
    }
}