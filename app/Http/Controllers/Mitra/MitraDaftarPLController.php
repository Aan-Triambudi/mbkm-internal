<?php

namespace App\Http\Controllers\Mitra;

use App\Models\PLMitra;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MitraDaftarPLController extends Controller
{
    public function index()
    {
        $mitras = PLMitra::with('mitra', 'user')->get();
        return view('backend.Dash-Mitra.pages.pl-mitra.index', compact('mitras'));
    }
}
