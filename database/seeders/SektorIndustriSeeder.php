<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SektorIndustriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sektor_industri')->insert([
            'nama' => 'Industri 1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Menambahkan data sektor_industri lainnya
         DB::table('sektor_industri')->insert([
             'nama' => 'Industri 2',
             'created_at' => now(),
             'updated_at' => now(),
         ]);
    }
}