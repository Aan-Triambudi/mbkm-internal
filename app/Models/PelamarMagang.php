<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PelamarMagang extends Model
{
    use HasFactory;
    protected $table = 'pelamar_magang';
    protected $fillable = ['status_diterima', 'id_mahasiswa', 'id_lowongan'];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'id_mahasiswa');
    }

    public function lowongan()
    {
        return $this->belongsTo(Lowongan::class, 'id_lowongan');
    }
}