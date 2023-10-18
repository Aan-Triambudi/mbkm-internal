<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LaporanMingguanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('laporan_mingguan')->insert([
            'keterangan' => 'Laporan mingguan mahasiswa 1',
            'validasi_pl' => 'aktif',
            'id_mahasiswa' => 1, // Ganti dengan ID mahasiswa yang sesuai
            'id_program_magang' => 3, // Ganti dengan ID program_magang yang sesuai
            'id_kompetensi_lowongan' => 1, // Ganti dengan ID kompetensi_lowongan yang sesuai
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Menambahkan data laporan_mingguan lainnya
         DB::table('laporan_mingguan')->insert([
             'keterangan' => 'Laporan mingguan mahasiswa 2',
             'validasi_pl' => 'aktif',
             'id_mahasiswa' => 2, // Ganti dengan ID mahasiswa yang sesuai
             'id_program_magang' => 4, // Ganti dengan ID program_magang yang sesuai
             'id_kompetensi_lowongan' => 2, // Ganti dengan ID kompetensi_lowongan yang sesuai
             'created_at' => now(),
             'updated_at' => now(),
         ]);
    }
}