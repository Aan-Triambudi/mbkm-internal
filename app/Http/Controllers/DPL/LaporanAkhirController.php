<?php

namespace App\Http\Controllers\DPL;

use App\Models\Logbook;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LaporanAkhirController extends Controller
{

    public function listlapakhir()
    {
        $logbooks = Logbook::with('mahasiswa')->get();

        // Mengelompokkan logbook berdasarkan NIM mahasiswa
        $groupedLogbooks = $logbooks->groupBy('mahasiswa.nim');

        return view('backend.Dash-DPL.pages.laporan-akhir.list-lapakhir', compact('groupedLogbooks'));
    }
    

    public function show($id)
    {
        $groupedLogbooks = Logbook::with('mahasiswa', 'programMagang')->where('id_mahasiswa', $id)
            ->get()
            ->groupBy('mahasiswa.id');
        return view('backend.Dash-DPL.pages.laporan-akhir.show-bukti', compact('groupedLogbooks'));
    }
}