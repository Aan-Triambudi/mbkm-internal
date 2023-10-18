<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KomentarLogbookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('komentar_logbook')->insert([
            'komentar' => 'Komentar logbook mahasiswa 1',
            'tanggal' => '2023-10-03', // Format tanggal sesuaikan dengan format yang digunakan di database Anda
            'nilai' => 90,
            'id_pendamping_lapang_mahasiswa' => 2, // Ganti dengan ID pendamping_lapang_mahasiswa yang sesuai
            'id_logbook' => 3, // Ganti dengan ID logbook yang sesuai
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Menambahkan data komentar_logbook lainnya
         DB::table('komentar_logbook')->insert([
             'komentar' => 'Komentar logbook mahasiswa 2',
             'tanggal' => '2023-10-04', // Format tanggal sesuaikan dengan format yang digunakan di database Anda
             'nilai' => 85,
             'id_pendamping_lapang_mahasiswa' => 3, // Ganti dengan ID pendamping_lapang_mahasiswa yang sesuai
             'id_logbook' => 4, // Ganti dengan ID logbook yang sesuai
             'created_at' => now(),
             'updated_at' => now(),
         ]);
    }
}