<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiMagangExt extends Model
{
    use HasFactory;
    protected $table = 'nilai_magang_ext';
    protected $fillable = ['id_mahasiswa', 'id_magang_ext', 'id_periode'];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'id_mahasiswa');
    }

    public function magangExt()
    {
        return $this->belongsTo(MahasiswaMagang::class, 'id_magang_ext');
    }

    public function periode()
    {
        return $this->belongsTo(Periode::class, 'id_periode');
    }
}