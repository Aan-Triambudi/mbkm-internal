<?php

namespace Database\Seeders;

use App\Models\EvaluasiMagang;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EvaluasiMagangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EvaluasiMagang::create([
            'komentar' => 'Evaluasi pertama',
            'file_sertifikat' => 'nama_file_sertifikat_1.pdf', // Sesuaikan dengan nama file sebenarnya
            'id_mahasiswa_magang' => 1,
        ]);

        EvaluasiMagang::create([
            'komentar' => 'Evaluasi kedua',
            'file_sertifikat' => 'nama_file_sertifikat_2.pdf', // Sesuaikan dengan nama file sebenarnya
            'id_mahasiswa_magang' => 2,
        ]);
    }
}
