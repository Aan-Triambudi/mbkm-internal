<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanMingguan extends Model
{
    use HasFactory;
    protected $table = 'laporan_mingguan';
    protected $fillable = ['keterangan', 'validasi_pl', 'id_mahasiswa', 'id_program_magang', 'id_kompetensi_lowongan'];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'id_mahasiswa');
    }

    public function programMagang()
    {
        return $this->belongsTo(ProgramMagang::class, 'id_program_magang');
    }

    public function kompetensiLowongan()
    {
        return $this->belongsTo(KompetensiLowongan::class, 'id_kompetensi_lowongan');
    }
}