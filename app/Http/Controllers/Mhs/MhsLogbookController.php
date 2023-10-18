<?php

namespace App\Http\Controllers\Mhs;

use App\Models\Logbook;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use App\Models\ProgramMagang;
use App\Http\Controllers\Controller;

class MhsLogbookController extends Controller
{
    public function index()
    {
        $programMagangs = ProgramMagang::all(); // Sesuaikan dengan nama model ProgramMagang Anda
        $mahasiswas = Mahasiswa::all(); // Sesuaikan dengan nama model Mahasiswa Anda
        return view('backend.Dash-Mhs.pages.logbook.index', compact('programMagangs', 'mahasiswas'));
    }
    // Metode untuk menangani pengiriman formulir
    public function submitLogbook(Request $request)
    {
        // Validasi data yang diterima dari formulir
        $request->validate([
            'kegiatan' => 'required|string',
            'bukti' => 'required|file|mimes:pdf,jpg,jpeg,png|max:2048',
            'id_program_magang' => 'required|exists:program_magangs,id',
            'id_mahasiswa' => 'required|exists:mahasiswas,id',
        ]);

        // Unggah file bukti
        $buktiPath = $request->file('bukti')->store('bukti_logbook', 'public');

        // Simpan data logbook ke database
        Logbook::create([
            'kegiatan' => $request->input('kegiatan'),
            'bukti' => $buktiPath,
            'id_program_magang' => $request->input('id_program_magang'),
            'id_mahasiswa' => $request->input('id_mahasiswa'),
        ]);

        // Redirect atau berikan respons sesuai kebutuhan
        return redirect()->route('logbook.index')->with('success', 'Logbook berhasil disubmit.');
    }
}