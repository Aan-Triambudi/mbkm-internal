<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LowonganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('lowongan')->insert([
            'nama' => 'Lowongan 1',
            'jumlah_lowongan' => 5,
            'deskripsi' => 'Deskripsi Lowongan 1',
            'tgl_buka' => now(),
            'tgl_ditutup' => now()->addDays(7),
            'tgl_magang_mulai' => now()->addDays(14),
            'tgl_magang_berakhir' => now()->addDays(60),
            'status' => 'aktif',
            'id_mitra' => 1, // Ganti dengan ID mitra yang sesuai
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Menambahkan data lowongan lainnya
         DB::table('lowongan')->insert([
             'nama' => 'Lowongan 2',
             'jumlah_lowongan' => 3,
             'deskripsi' => 'Deskripsi Lowongan 2',
             'tgl_buka' => now(),
             'tgl_ditutup' => now()->addDays(7),
             'tgl_magang_mulai' => now()->addDays(21),
             'tgl_magang_berakhir' => now()->addDays(75),
             'status' => 'aktif',
             'id_mitra' => 2, // Ganti dengan ID mitra yang sesuai
             'created_at' => now(),
             'updated_at' => now(),
         ]);

    }
}