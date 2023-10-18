<?php

namespace App\Http\Controllers\PL;

use Illuminate\Http\Request;
use App\Models\ProgramMagang;
use App\Http\Controllers\Controller;

class KegiatanController extends Controller
{
    public function index()
    {
        $kegiatans = ProgramMagang::all();
        return view('backend.Dash-PL.pages.kegiatan.index', compact('kegiatans'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'kegiatan' => 'required|string|max:255',
        ]);

        $kegiatan = ProgramMagang::find($id);
        $kegiatan->kegiatan = $request->input('kegiatan');
        $kegiatan->save();

        return redirect()->route('kegiatan.index')->with('success', 'Kegiatan berhasil diperbarui.');
    }

    public function updatePosisiMahasiswa(Request $request, $id)
{
    // Validasi input
    $request->validate([
        'posisi_mahasiswa' => 'required|string',
    ]);

    // Temukan program magang berdasarkan ID
    $programMagang = ProgramMagang::findOrFail($id);

    // Perbarui posisi mahasiswa
    $programMagang->update([
        'posisi_mahasiswa' => $request->input('posisi_mahasiswa'),
    ]);

    // Redirect dengan pesan sukses
    return redirect()->route('kegiatan.index')->with('success', 'Posisi mahasiswa berhasil diperbarui.');
}
}
