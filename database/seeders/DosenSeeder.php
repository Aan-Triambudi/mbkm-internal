<?php

namespace Database\Seeders;

use App\Models\Dosen;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Data prodi yang akan di-seed
        DB::table('dosen')->insert([
            'nama' => 'Nama Dosen',
            'notelp' => '123456789',
            'id_prodi' => 1, // ID prodi dari tabel prodi
            'id_user' => 1, // ID user dari tabel users
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Menambahkan data dosen lainnya
        DB::table('dosen')->insert([
            'nama' => 'Nama Dosen Lain',
            'notelp' => '987654321',
            'id_prodi' => 2, // ID prodi dari tabel prodi
            'id_user' => 2, // ID user dari tabel users
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
