<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Logbook extends Model
{
    use HasFactory;
    protected $table = 'logbook';
    protected $fillable = ['kegiatan', 'bukti', 'status','id_program_magang', 'id_mahasiswa'];

    public function programMagang()
    {
        return $this->belongsTo(ProgramMagang::class, 'id_program_magang');
    }

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'id_mahasiswa');
    }

    public function komentarLogbook()
    {
        return $this->hasMany(KomentarLogbook::class, 'id_logbook');
    }
}
