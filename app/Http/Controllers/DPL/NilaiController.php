<?php

namespace App\Http\Controllers\DPL;

use App\Models\Matkul;
use App\Models\Logbook;
use Illuminate\Http\Request;
use App\Models\NilaiKonversi;
use App\Http\Controllers\Controller;

class NilaiController extends Controller
{

    public function listnilai()
    {
        $logbooks = Logbook::with('mahasiswa')->get();

        // Mengelompokkan logbook berdasarkan NIM mahasiswa
        $groupedLogbooks = $logbooks->groupBy('mahasiswa.nim');

        return view('backend.Dash-DPL.pages.nilai.list-nilai', compact('groupedLogbooks'));
    }

    public function update(Request $request, $id)
{
    // Validasi nilai angka
    $request->validate([
        'nilai_angka' => 'required|numeric|min:0|max:100',
        'nilai_huruf' => 'required|string|max:255', // Sesuaikan dengan kebutuhan validasi untuk nilai huruf
        'id_matkul' => 'required|exists:matkul,id', // Pastikan tabel mata_kuliah sudah ada di database
    ]);

    // Cari entri nilai berdasarkan ID
    $nilai = NilaiKonversi::find($id);

    // Perbarui nilai angka dan nilai huruf
    $nilai->nilai_angka = $request->input('nilai_angka');
    $nilai->nilai_huruf = $request->input('nilai_huruf');

    // Simpan perubahan ke basis data
    $nilai->save();

    // Redirect atau response sesuai kebutuhan
    return redirect()->route('nilai.index')->with('success', 'Nilai huruf berhasil diperbarui.');
}

public function show($id)
{
    $listMataKuliah = Matkul::all();
    $nilaiKonversi = NilaiKonversi::all();
    $groupedLogbooks = Logbook::with('mahasiswa', 'programMagang')->where('id_mahasiswa', $id)
        ->get()
        ->groupBy('mahasiswa.id');
    return view('backend.Dash-DPL.pages.nilai.show-bukti', compact('groupedLogbooks', 'nilaiKonversi', 'listMataKuliah'));
}
}