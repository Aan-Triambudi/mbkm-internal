<?php

namespace App\Http\Controllers\Mitra;

use App\Models\Logbook;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MitraLogbookMhsController extends Controller
{
    public function index()
    {
        $logbooks = Logbook::with('programMagang', 'mahasiswa')->paginate(10);
        return view('backend.Dash-Mitra.pages.logbook.index', compact('logbooks'));
    }
}