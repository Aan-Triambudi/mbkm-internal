<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kategori')->insert([
            'nama' => 'Kategori 1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Menambahkan data kategori lainnya
         DB::table('kategori')->insert([
             'nama' => 'Kategori 2',
             'created_at' => now(),
             'updated_at' => now(),
         ]);
    }
}