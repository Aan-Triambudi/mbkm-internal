<?php

namespace App\Http\Controllers\Kaprodi;

use App\Models\Logbook;
use Illuminate\Http\Request;
use App\Models\NilaiKonversi;
use App\Http\Controllers\Controller;

class KaprodiKonversiNilaiController extends Controller
{
     public function listkonversinilai()
    {
        $logbooks = Logbook::with('mahasiswa')->get();

        // Mengelompokkan logbook berdasarkan NIM mahasiswa
        $groupedLogbooks = $logbooks->groupBy('mahasiswa.nim');

        return view('backend.Dash-Kaprodi.pages.konversi-nilai.list-konversinilai', compact('groupedLogbooks'));
    }
    
    public function show()
    {
        $nilaiKonversis = NilaiKonversi::with(['mahasiswa', 'matkul', 'lowongan', 'nilaiMagangExt'])->get();
        return view('backend.Dash-Kaprodi.pages.konversi-nilai.show-bukti', compact('nilaiKonversis'));
    }

    public function store(Request $request)
    {
    // Validasi data yang diterima dari formulir
    $request->validate([
        'nilai_angka' => 'required|numeric|min:0|max:100',
        'nilai_huruf' => 'required|string|max:255',
        'validasi_kaprodi' => 'required|in:Approved,Pending,Denied',
        // ... tambahkan validasi lainnya sesuai kebutuhan
    ]);

    // Simpan data baru ke dalam database
    NilaiKonversi::create([
        'nilai_angka' => $request->input('nilai_angka'),
        'nilai_huruf' => $request->input('nilai_huruf'),
        'validasi_kaprodi' => $request->input('validasi_kaprodi'),
        // ... tambahkan kolom lainnya sesuai kebutuhan
    ]);

    // Redirect ke halaman yang sesuai, misalnya index atau halaman detail
    return redirect()->route('konversi-nilai.show')->with('success', 'Data berhasil disimpan.');
    }

    public function update(Request $request, $id)
    {
        // Validasi request
        $request->validate([
            'validasi_kaprodi' => 'required|in:Setuju,Tidak Setuju',
        ]);

        // Temukan nilai konversi berdasarkan ID
        $nilaiKonversi = NilaiKonversi::findOrFail($id);

        // Update validasi Kaprodi
        $nilaiKonversi->validasi_kaprodi = $request->validasi_kaprodi;
        $nilaiKonversi->save();

        // Redirect ke halaman yang sesuai, misalnya index atau halaman detail
        return redirect()->route('konversi-nilai.show', $nilaiKonversi->id)->with('success', 'Data berhasil diperbarui.');
    }
}