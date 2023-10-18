<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiMagang extends Model
{
    use HasFactory;
    protected $table = 'nilai_magang';
    protected $fillable = ['nilai_angka', 'nilai_huruf', 'id_mahasiswa', 'id_kompetensi_program'];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'id_mahasiswa');
    }

    public function kompetensiProgram()
    {
        return $this->belongsTo(KompetensiProgram::class, 'id_kompetensi_program');
    }

}