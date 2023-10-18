<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProgramMagangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('program_magang')->insert([
            'kegiatan' => 'Magang di Departemen IT',
            'waktu_mulai' => now(),
            'waktu_akhir' => now()->addMonths(3),
            'posisi_mahasiswa' => 'Magang IT Support',
            'validasi_kaprodi' => 'setuju', // Sesuaikan dengan opsi validasi yang ada
            'id_lowongan' => 1, // Ganti dengan ID lowongan yang sesuai
            'id_pl_mitra' => 1, // Ganti dengan ID PL Mitra yang sesuai
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Menambahkan data program magang lainnya
         DB::table('program_magang')->insert([
             'kegiatan' => 'Magang di Departemen Pemasaran',
             'waktu_mulai' => now(),
             'waktu_akhir' => now()->addMonths(4),
             'posisi_mahasiswa' => 'Magang Marketing Assistant',
             'validasi_kaprodi' => 'setuju', // Sesuaikan dengan opsi validasi yang ada
             'id_lowongan' => 2, // Ganti dengan ID lowongan yang sesuai
             'id_pl_mitra' => 2, // Ganti dengan ID PL Mitra yang sesuai
             'created_at' => now(),
             'updated_at' => now(),
         ]);
    }
}