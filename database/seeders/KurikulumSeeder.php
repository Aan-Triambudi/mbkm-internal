<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KurikulumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kurikulum')->insert([
            'nama' => 'Kurikulum 1',
            'status' => 'Aktif',
            'id_prodi' => 1, // Ganti dengan ID prodi yang sesuai
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Menambahkan data kurikulum lainnya
         DB::table('kurikulum')->insert([
             'nama' => 'Kurikulum 2',
             'status' => 'Aktif',
             'id_prodi' => 2, // Ganti dengan ID prodi yang sesuai
             'created_at' => now(),
             'updated_at' => now(),
         ]);
    }
}