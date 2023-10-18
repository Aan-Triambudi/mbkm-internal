<?php

namespace App\Http\Controllers\Mhs;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use App\Models\ProgramMagang;
use App\Models\LaporanMingguan;
use App\Models\KompetensiLowongan;
use App\Http\Controllers\Controller;

class MhsLaporanMingguanController extends Controller
{
    public function index()
    {
        $mahasiswas = Mahasiswa::all();
        $programMagangs = ProgramMagang::all();
        $kompetensiLowongans = KompetensiLowongan::all();

        return view('backend.Dash-Mhs.pages.laporan-mingguan.index', compact('mahasiswas', 'programMagangs', 'kompetensiLowongans'));
    }

    public function submit(Request $request)
    {
        $request->validate([
            'nim' => 'required|exists:mahasiswas,nim',
            'program_magang' => 'required|exists:program_magangs,id',
            'kompetensi_lowongan' => 'required|exists:kompetensi_lowongans,id',
            'keterangan' => 'required|string',
        ]);

        LaporanMingguan::create([
            'nim' => $request->input('nim'),
            'id_program_magang' => $request->input('program_magang'),
            'id_kompetensi_lowongan' => $request->input('kompetensi_lowongan'),
            'keterangan' => $request->input('keterangan'),
        ]);

        return redirect()->route('laporan-mingguan.index')->with('success', 'Laporan mingguan berhasil disubmit.');
    }
}