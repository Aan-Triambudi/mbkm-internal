<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CPLSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cpl')->insert([
            'kode_cpl' => 'Kode CPL 1',
            'deskripsi' => 'Deskripsi CPL 1',
            'jenis_cpl' => 'Jenis CPL 1',
            'id_kurikulum' => 1, // Ganti dengan ID kurikulum yang sesuai
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Menambahkan data cpl lainnya
         DB::table('cpl')->insert([
             'kode_cpl' => 'Kode CPL 2',
             'deskripsi' => 'Deskripsi CPL 2',
             'jenis_cpl' => 'Jenis CPL 2',
             'id_kurikulum' => 2, // Ganti dengan ID kurikulum yang sesuai
             'created_at' => now(),
             'updated_at' => now(),
         ]);
    }
}