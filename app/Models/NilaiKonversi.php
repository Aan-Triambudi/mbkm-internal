<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiKonversi extends Model
{
    use HasFactory;
    protected $table = 'nilai_konversi';
    protected $fillable = ['nilai_angka', 'nilai_huruf', 'validasi_kaprodi', 'id_mahasiswa', 'id_matkul', 'id_lowongan', 'id_nilai_magang'];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'id_mahasiswa');
    }

    public function matkul()
    {
        return $this->belongsTo(Matkul::class, 'id_matkul');
    }

    public function lowongan()
    {
        return $this->belongsTo(Lowongan::class, 'id_lowongan');
    }

    public function nilaiMagang()
    {
        return $this->belongsTo(NilaiMagang::class, 'id_nilai_magang');
    }

    public function nilaiMagangExt()
    {
        return $this->belongsTo(NilaiMagangExt::class, 'id_nilai_magang_ext');
    }
}
