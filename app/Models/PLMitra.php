<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PLMitra extends Model
{
    use HasFactory;
    protected $table = 'pl_mitra';
    protected $fillable = ['nama', 'notelp', 'email', 'id_mitra', 'id_user'];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function mitra()
    {
        return $this->belongsTo(Mitra::class, 'id_mitra');
    }

    public function pendampingLapangMahasiswa()
    {
        return $this->hasMany(PendampingLapangMahasiswa::class, 'id_pl_mitra');
    }
}