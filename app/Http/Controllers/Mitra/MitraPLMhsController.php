<?php

namespace App\Http\Controllers\Mitra;

use App\Models\PLMitra;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PendampingLapangMahasiswa;

class MitraPLMhsController extends Controller
{
    public function index()
    {
        $plMitraList = PLMitra::all();
        $pendampingLapangMahasiswas = PendampingLapangMahasiswa::with(['dosen', 'mahasiswa', 'plMitra', 'lowongan'])->get();
        return view('backend.Dash-Mitra.pages.pl-mahasiswa.index', compact('plMitraList','pendampingLapangMahasiswas'));
    }

    public function update(Request $request, $id)
    {
        $pendampingLapangMahasiswa = PendampingLapangMahasiswa::findOrFail($id);

        // Validasi data yang diterima dari form
        $request->validate([
            'id_pl_mitra' => 'required|exists:pl_mitra,id',
        ]);

        // Update data pendamping lapang mahasiswa
        $pendampingLapangMahasiswa->id_pl_mitra = $request->input('id_pl_mitra');
        $pendampingLapangMahasiswa->save();

        return redirect()->back()->with('success', 'PL Mitra berhasil diperbarui.');
    }
}