<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LogbookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('logbook')->insert([
            'kegiatan' => 'Meeting dengan tim proyek',
            'bukti' => 'bukti_meeting.jpg',
            'id_program_magang' => 3, // Ganti dengan ID program magang yang sesuai
            'id_mahasiswa' => 1, // Ganti dengan ID mahasiswa yang sesuai
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Menambahkan data logbook lainnya
         //DB::table('logbook')->insert([
         //    'kegiatan' => 'Presentasi hasil riset',
         //    'bukti' => 'bukti_presentasi.pdf',
         //    'id_program_magang' => 4, // Ganti dengan ID program magang yang sesuai
         //    'id_mahasiswa' => 2, // Ganti dengan ID mahasiswa yang sesuai
         //    'created_at' => now(),
         //    'updated_at' => now(),
         //]);
    }
}