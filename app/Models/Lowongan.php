<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lowongan extends Model
{
    use HasFactory;
    protected $table = 'lowongan';
    protected $fillable = ['nama', 'jumlah_lowongan', 'deskripsi', 'tgl_buka', 'tgl_ditutup', 'tgl_magang_mulai', 'tgl_magang_berakhir', 'status', 'id_mitra'];

    public function mitra()
    {
        return $this->belongsTo(Mitra::class, 'id_mitra');
    }

    public function programMagang()
    {
        return $this->hasMany(ProgramMagang::class, 'id_lowongan');
    }

    public function kompetensiLowongan()
    {
        return $this->hasMany(KompetensiLowongan::class, 'id_lowongan');
    }

    public function pelamarMagang()
    {
        return $this->hasMany(PelamarMagang::class, 'id_lowongan');
    }
}