<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramMagang extends Model
{
    use HasFactory;
     protected $table = 'program_magang';

     protected $fillable = [
        'kegiatan',
        'waktu_mulai',
        'waktu_akhir',
        'posisi_mahasiswa',
        'validasi_kaprodi',
        'id_lowongan',
        'id_pl_mitra',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function sektorIndustri()
    {
        return $this->belongsTo(SektorIndustri::class, 'id_sektor_industri');
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }

    public function plMitra()
    {
        return $this->hasMany(PLMitra::class, 'id_mitra');
    }

    public function lowongan()
    {
        return $this->hasMany(Lowongan::class, 'id_mitra');
    }
}
