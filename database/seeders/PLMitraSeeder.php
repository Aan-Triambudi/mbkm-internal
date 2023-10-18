<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PLMitraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pl_mitra')->insert([
            'nama' => 'PL Mitra 1',
            'notelp' => '123456789',
            'email' => 'plmitra1@example.com',
            'id_mitra' => 1, // Ganti dengan ID mitra yang sesuai
            'id_user' => 1, // Ganti dengan ID user yang sesuai
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Menambahkan data PL Mitra lainnya
         DB::table('pl_mitra')->insert([
             'nama' => 'PL Mitra 2',
             'notelp' => '987654321',
             'email' => 'plmitra2@example.com',
             'id_mitra' => 2, // Ganti dengan ID mitra yang sesuai
             'id_user' => 2, // Ganti dengan ID user yang sesuai
             'created_at' => now(),
             'updated_at' => now(),
         ]);
    }
}