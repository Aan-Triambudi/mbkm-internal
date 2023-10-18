<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluasiMagang extends Model
{
    use HasFactory;
    protected $table = 'evaluasi_magang'; // Nama tabel sesuai dengan tabel di database
    protected $fillable = ['komentar', 'file_sertifikat', 'id_mahasiswa_magang']; // Kolom yang dapat diisi

    // Relasi dengan model MahasiswaMagang
    public function mahasiswaMagang()
    {
        return $this->belongsTo(MahasiswaMagang::class, 'id_mahasiswa_magang', 'id');
    }
}