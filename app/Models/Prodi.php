<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    use HasFactory;
    protected $table = 'prodi';
    protected $fillable = ['nama'];

    public function dosen()
    {
        return $this->hasMany(Dosen::class, 'id_prodi');
    }

    public function mahasiswa()
    {
        return $this->hasMany(Mahasiswa::class, 'id_prodi');
    }

    public function kurikulum()
    {
        return $this->hasMany(Kurikulum::class, 'id_prodi');
    }
}