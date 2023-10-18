<?php

namespace App\Http\Controllers\PL;

use App\Models\Logbook;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LogbookMhsController extends Controller
{

    public function listlogbook()
    {
        $logbooks = Logbook::with('mahasiswa')->get();

        // Mengelompokkan logbook berdasarkan NIM mahasiswa
        $groupedLogbooks = $logbooks->groupBy('mahasiswa.nim');

        return view('backend.Dash-PL.pages.logbook.list-logbook', compact('groupedLogbooks'));
    }
    
    public function show($id)
    {
        $logbooks = Logbook::with('programMagang', 'mahasiswa')->paginate(10);
        $groupedLogbooks = Logbook::with('mahasiswa', 'programMagang')->where('id_mahasiswa', $id)
            ->get()
            ->groupBy('mahasiswa.id');
        return view('backend.Dash-PL.pages.logbook.show-bukti', compact('logbooks','groupedLogbooks'));
    }
}