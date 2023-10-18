<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MitraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mitra')->insert([
            'nama' => 'Nama Mitra 1',
            'alamat' => 'Alamat Mitra 1',
            'kota' => 'Kota Mitra 1',
            'provinsi' => 'Provinsi Mitra 1',
            'website' => 'http://mitra1.com',
            'narahubung' => 'Narahubung Mitra 1',
            'email' => 'mitra1@example.com',
            'foto' => 'mitra1.jpg',
            'status' => 'aktif',
            'id_user' => 1, // Ganti dengan ID user yang sesuai
            'id_sektor_industri' => 1, // Ganti dengan ID sektor industri yang sesuai
            'id_kategori' => 1, // Ganti dengan ID kategori yang sesuai
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Menambahkan data mitra lainnya
         DB::table('mitra')->insert([
             'nama' => 'Nama Mitra 2',
             'alamat' => 'Alamat Mitra 2',
             'kota' => 'Kota Mitra 2',
             'provinsi' => 'Provinsi Mitra 2',
             'website' => 'http://mitra1.com',
             'narahubung' => 'Narahubung Mitra 2',
             'email' => 'mitra2@example.com',
             'foto' => 'mitra2.jpg',
             'status' => 'aktif',
             'id_user' => 2, // Ganti dengan ID user yang sesuai
             'id_sektor_industri' => 2, // Ganti dengan ID sektor industri yang sesuai
             'id_kategori' => 1, // Ganti dengan ID kategori yang sesuai
             'created_at' => now(),
             'updated_at' => now(),
         ]);
    }
}