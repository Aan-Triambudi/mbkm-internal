<?php

namespace App\Http\Controllers\DPL;

use App\Models\Logbook;
use Illuminate\Http\Request;
use App\Models\EvaluasiMagang;
use App\Http\Controllers\Controller;

class LaporanEvaluasiController extends Controller
{

    public function listlaposi()
    {
        $logbooks = Logbook::with('mahasiswa')->get();

        // Mengelompokkan logbook berdasarkan NIM mahasiswa
        $groupedLogbooks = $logbooks->groupBy('mahasiswa.nim');

        return view('backend.Dash-DPL.pages.laporan-evaluasi.list-laposi', compact('groupedLogbooks'));
    }
    public function index()
    {
        $evaluasiMagangs = EvaluasiMagang::all();
        return view('backend.Dash-DPL.pages.laporan-evaluasi.index', compact('evaluasiMagangs'));
    }

    public function download($file)
    {
        $path = storage_path('app/certificates/' . $file);
        return response()->download($path);
    }

    public function view($file)
    {
        $path = storage_path('app/certificates/' . $file);
        return response()->file($path);
    }

    public function addComment(Request $request, $id)
    {
        // Lakukan validasi komentar jika diperlukan
        $request->validate([
            'comment' => 'required|string',
        ]);

        // Simpan komentar ke database menggunakan ID yang diberikan
        $evaluasiMagang = EvaluasiMagang::findOrFail($id);
        $evaluasiMagang->komentar = $request->input('comment');
        $evaluasiMagang->save();

        // Redirect kembali atau kirim respons JSON sesuai kebutuhan aplikasi Anda
        return redirect()->back()->with('success', 'Komentar berhasil disimpan.');
    }

    public function show($id)
    {
        $evaluasiMagangs = EvaluasiMagang::all();
        $groupedLogbooks = Logbook::with('mahasiswa', 'programMagang')->where('id_mahasiswa', $id)
            ->get()
            ->groupBy('mahasiswa.id');
        return view('backend.Dash-DPL.pages.laporan-evaluasi.show-bukti', compact('groupedLogbooks','evaluasiMagangs'));
    }
}