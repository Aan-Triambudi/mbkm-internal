<?php

namespace App\Http\Controllers\Mitra;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MitraSertifikatController extends Controller
{
    public function index()
    {

        return view('backend.Dash-Mitra.pages.sertifikat.index');
    }
}