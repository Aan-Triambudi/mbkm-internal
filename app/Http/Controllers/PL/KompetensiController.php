<?php

namespace App\Http\Controllers\PL;


use App\Models\Lowongan;
use Illuminate\Http\Request;
use App\Models\KompetensiLowongan;
use App\Http\Controllers\Controller;

class KompetensiController extends Controller
{
    public function index()
    {
        $kompetensiLowongans = KompetensiLowongan::with('lowongan')->get();
        $lowongans = Lowongan::all();
        return view('backend.Dash-PL.pages.kompetensi.index', compact('kompetensiLowongans','lowongans'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kompetensi' => 'required',
            'id_lowongan' => 'required',
        ]);

        $kompetensiLowongan = KompetensiLowongan::find($id);
        $kompetensiLowongan->kompetensi = $request->kompetensi;
        $kompetensiLowongan->id_lowongan = $request->id_lowongan;
        $kompetensiLowongan->save();

        return redirect()->route('kompetensi.index')->with('success', 'Kompetensi berhasil diperbarui.');
    }


}
