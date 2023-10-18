<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KetercapaianCPL extends Model
{
    use HasFactory;
    protected $table = 'ketercapaian_cpl';
    protected $fillable = ['id_mahasiswa', 'id_program_magang', 'id_cpl'];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'id_mahasiswa');
    }

    public function programMagang()
    {
        return $this->belongsTo(ProgramMagang::class, 'id_program_magang');
    }

    public function cpl()
    {
        return $this->belongsTo(CPL::class, 'id_cpl');
    }
}