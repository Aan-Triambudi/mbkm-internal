<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KomentarLogbook extends Model
{
    use HasFactory;
    protected $table = 'komentar_logbook';
    protected $fillable = ['komentar', 'tanggal', 'nilai', 'id_pendamping_lapang_mahasiswa', 'id_logbook'];

    public function pendampingLapangMahasiswa()
    {
        return $this->belongsTo(PendampingLapangMahasiswa::class, 'id_pendamping_lapang_mahasiswa');
    }

    public function logbook()
    {
        return $this->belongsTo(Logbook::class, 'id_logbook');
    }
}