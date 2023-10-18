<?php

namespace App\Http\Controllers\DPL;

use App\Models\Logbook;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;


class LogbookController extends Controller
{
    public function listlogbook()
    {
        $logbooks = Logbook::with('mahasiswa')->get();

        // Mengelompokkan logbook berdasarkan NIM mahasiswa
        $groupedLogbooks = $logbooks->groupBy('mahasiswa.nim');

        return view('backend.Dash-DPL.pages.logbook.list-logbook', compact('groupedLogbooks'));
    }


    public function show($id)
    {
        $groupedLogbooks = Logbook::with('mahasiswa', 'programMagang')->where('id_mahasiswa', $id)
            ->get()
            ->groupBy('mahasiswa.id');
        return view('backend.Dash-DPL.pages.logbook.show-bukti', compact('groupedLogbooks'));
    }
}