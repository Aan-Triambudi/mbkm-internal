<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kaprodi extends Model
{
    use HasFactory;
    protected $table = 'kaprodi';
    protected $fillable = ['periode_mulai', 'periode_akhir', 'status', 'id_dosen'];

    public function dosen()
    {
        return $this->belongsTo(Dosen::class, 'id_dosen');
    }
}