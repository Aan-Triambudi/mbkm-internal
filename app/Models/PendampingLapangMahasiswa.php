<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendampingLapangMahasiswa extends Model
{
    use HasFactory;
    protected $table = 'pendamping_lapang_mahasiswa';
    protected $fillable = ['id_dosen', 'id_mahasiswa', 'id_pl_mitra', 'id_lowongan'];

    public function dosen()
    {
        return $this->belongsTo(Dosen::class, 'id_dosen');
    }

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'id_mahasiswa');
    }

    public function plMitra()
    {
        return $this->belongsTo(PLMitra::class, 'id_pl_mitra');
    }

    public function lowongan()
    {
        return $this->belongsTo(Lowongan::class, 'id_lowongan');
    }
}