<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MahasiswaMagang extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa_magang';
    protected $fillable = ['periode_aktif', 'id_mahasiswa'];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'id_mahasiswa');
    }

    public function logbook()
    {
        return $this->hasMany(Logbook::class, 'id_mahasiswa');
    }

    public function nilaiMagangExt()
    {
        return $this->hasOne(NilaiMagangExt::class, 'id_magang_ext');
    }
}