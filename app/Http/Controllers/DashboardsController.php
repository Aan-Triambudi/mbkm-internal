<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardsController extends Controller
{
    public function admin()
    {
        return view('backend.Admin-Prodi.pages.dashboard');
    }
    public function dpl()
    {
        return view('backend.Dash-DPL.pages.dashboard');
    }
    public function kaprodi()
    {
        return view('backend.Dash-Kaprodi.pages.dashboard');
    }
    public function mitra()
    {
        return view('backend.Dash-Mitra.pages.dashboard');
    }
    public function mhs()
    {
        return view('backend.Dash-Mhs.pages.dashboard');
    }
    public function pl()
    {
        return view('backend.Dash-PL.pages.dashboard');
    }
}