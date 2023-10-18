<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KompetensiLowongan extends Model
{
    use HasFactory;
    protected $table = 'kompetensi_lowongan';
    protected $fillable = ['kompetensi', 'id_lowongan'];

    public function lowongan()
    {
        return $this->belongsTo(Lowongan::class, 'id_lowongan');
    }

    public function kompetensiProgram()
    {
        return $this->hasMany(KompetensiProgram::class, 'id_kompetensi_lowongan');
    }
}
