<?php

namespace App\Http\Controllers\Kaprodi;

use App\Models\Logbook;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KaprodiLaporanAkhirController extends Controller
{
    public function listlapakhir()
    {
        $logbooks = Logbook::with('mahasiswa')->get();

        // Mengelompokkan logbook berdasarkan NIM mahasiswa
        $groupedLogbooks = $logbooks->groupBy('mahasiswa.nim');

        return view('backend.Dash-Kaprodi.pages.laporan-akhir.list-lapakhir', compact('groupedLogbooks'));
    }

    public function show($id)
    {
        $groupedLogbooks = Logbook::with('mahasiswa', 'programMagang')->where('id_mahasiswa', $id)
            ->get()
            ->groupBy('mahasiswa.id');
        return view('backend.Dash-Kaprodi.pages.laporan-akhir.show-bukti', compact('groupedLogbooks'));
    }
    
}