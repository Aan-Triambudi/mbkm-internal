<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kurikulum extends Model
{
    use HasFactory;
    protected $table = 'kurikulum';
    protected $fillable = ['nama', 'status', 'id_prodi'];

    public function prodi()
    {
        return $this->belongsTo(Prodi::class, 'id_prodi', 'id');
    }

    public function periodes()
    {
        return $this->hasMany(Periode::class, 'id_kurikulum', 'id');
    }
}