<?php

namespace App\Http\Controllers\Mitra;

use Illuminate\Http\Request;
use App\Models\EvaluasiMagang;
use App\Http\Controllers\Controller;

class LaporanMitraController extends Controller
{
    public function index()
    {
        $evaluasiMagangs = EvaluasiMagang::with('mahasiswaMagang')->get();
        return view('backend.Dash-Mitra.pages.laporan-mitra.index', compact('evaluasiMagangs'));
    }
    public function addComment(Request $request, $id)
    {
        $evaluasiMagang = EvaluasiMagang::find($id);
        if (!$evaluasiMagang) {
            abort(404);
        }

        $evaluasiMagang->komentar = $request->input('comment');
        $evaluasiMagang->save();

        return redirect()->back()->with('success', 'Komentar berhasil disimpan.');
    }

    public function downloadCertificate($file)
    {
        $filePath = storage_path("app/sertifikat/{$file}");
        return response()->download($filePath);
    }

    public function viewCertificate($file)
    {
        $filePath = storage_path("app/sertifikat/{$file}");
        return response()->file($filePath);
    }
}