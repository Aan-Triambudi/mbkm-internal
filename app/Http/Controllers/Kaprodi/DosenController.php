<?php

namespace App\Http\Controllers\Kaprodi;

use App\Models\Dosen;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DosenController extends Controller
{
    public function index()
    {
        $dosens = Dosen::with('prodi', 'user')->get();
        return view('backend.Dash-Kaprodi.pages.dosen.index', compact('dosens'));
    }
}