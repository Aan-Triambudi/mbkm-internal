<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
    use HasFactory;
    protected $table = 'mitra';
    protected $fillable = ['nama', 'alamat', 'kota', 'provinsi', 'website', 'narahubung', 'email', 'foto', 'status', 'id_user', 'id_sektor_industri', 'id_kategori'];

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