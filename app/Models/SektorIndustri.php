<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SektorIndustri extends Model
{
    use HasFactory;
    protected $table = 'sektor_industri';
    protected $fillable = ['nama'];

    public function mitra()
    {
        return $this->hasMany(Mitra::class, 'id_sektor_industri');
    }
}