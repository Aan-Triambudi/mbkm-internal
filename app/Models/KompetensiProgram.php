<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KompetensiProgram extends Model
{
    use HasFactory;
    protected $table = 'kompetensi_program';
    protected $fillable = ['id_program_magang', 'id_kompetensi_lowongan'];

    public function programMagang()
    {
        return $this->belongsTo(ProgramMagang::class, 'id_program_magang');
    }

    public function kompetensiLowongan()
    {
        return $this->belongsTo(KompetensiLowongan::class, 'id_kompetensi_lowongan');
    }
}