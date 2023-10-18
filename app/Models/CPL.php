<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CPL extends Model
{
    use HasFactory;
    protected $table = 'cpl';
    protected $fillable = ['kode_cpl', 'deskripsi', 'jenis_cpl', 'id_kurikulum'];

    public function kurikulum()
    {
        return $this->belongsTo(Kurikulum::class, 'id_kurikulum');
    }

    public function ketercapaianCPL()
    {
        return $this->hasMany(KetercapaianCPL::class, 'id_cpl');
    }
}