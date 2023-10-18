<?php

namespace App\Http\Controllers\Kaprodi;

use App\Models\Logbook;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KaprodiLogbookMhsController extends Controller
{
    public function listlogbook()
    {
        $logbooks = Logbook::with('mahasiswa')->get();

        // Mengelompokkan logbook berdasarkan NIM mahasiswa
        $groupedLogbooks = $logbooks->groupBy('mahasiswa.nim');

        return view('backend.Dash-Kaprodi.pages.logbook.list-logbook', compact('groupedLogbooks'));
    }

    public function show($id)
    {
        $logbooks = Logbook::with('mahasiswa')->get();
        $groupedLogbooks = Logbook::with('mahasiswa', 'programMagang')->where('id_mahasiswa', $id)
            ->get()
            ->groupBy('mahasiswa.id');
        return view('backend.Dash-Kaprodi.pages.logbook.show-bukti', compact('logbooks','groupedLogbooks'));
    }
}