<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa';
    protected $fillable = ['nim', 'angkatan', 'email', 'notelp', 'id_prodi', 'id_user'];

    public function prodi()
    {
        return $this->belongsTo(Prodi::class, 'id_prodi');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function mahasiswaMagang()
    {
        return $this->hasOne(MahasiswaMagang::class, 'id_mahasiswa');
    }

    public function laporanMingguan()
    {
        return $this->hasMany(LaporanMingguan::class, 'id_mahasiswa');
    }

    public function nilaiMagang()
    {
        return $this->hasMany(NilaiMagang::class, 'id_mahasiswa');
    }

    public function nilaiKonversi()
    {
        return $this->hasMany(NilaiKonversi::class, 'id_mahasiswa');
    }
}