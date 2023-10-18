<?php

namespace App\Http\Controllers\PL;

use App\Models\Logbook;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NilaiAkhirController extends Controller
{

    public function listnikhir()
    {
        $logbooks = Logbook::with('mahasiswa')->get();

        // Mengelompokkan logbook berdasarkan NIM mahasiswa
        $groupedLogbooks = $logbooks->groupBy('mahasiswa.nim');

        return view('backend.Dash-PL.pages.nilai-akhir.list-nikhir', compact('groupedLogbooks'));
    }
    
    public function show($id)
    {
        $groupedLogbooks = Logbook::with('mahasiswa', 'programMagang')->where('id_mahasiswa', $id)
            ->get()
            ->groupBy('mahasiswa.id');
        return view('backend.Dash-PL.pages.nilai-akhir.show-bukti', compact('groupedLogbooks'));
    }

}