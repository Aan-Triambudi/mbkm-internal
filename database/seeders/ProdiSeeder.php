<?php

namespace Database\Seeders;

use App\Models\Prodi;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $prodiData = [
            ['nama' => 'Teknik Informatika'],
            ['nama' => 'Sistem Informasi'],
            ['nama' => 'Teknik Elektro'],
            ['nama' => 'Teknik Mesin'],
            ['nama' => 'Teknik Kimia'],
        ];

        // Masukkan data prodi ke dalam tabel "prodi"
        DB::table('prodi')->insert($prodiData);
    }
}