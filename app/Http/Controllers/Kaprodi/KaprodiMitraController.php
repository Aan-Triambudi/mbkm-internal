<?php

namespace App\Http\Controllers\Kaprodi;

use Illuminate\Http\Request;
use App\Models\ProgramMagang;
use App\Http\Controllers\Controller;

class KaprodiMitraController extends Controller
{
    public function index()
    {
        $programMagangs = ProgramMagang::with(['lowongan', 'plMitra'])->paginate(10);
        return view('backend.Dash-Kaprodi.pages.mitra.index', compact('programMagangs'));
    }

    public function konfirmasi(Request $request, $id)
{
    $programMagang = ProgramMagang::findOrFail($id);
    $programMagang->konfirmasi = $request->has('konfirmasi');
    $programMagang->save();

    return redirect()->back()->with('success', 'Konfirmasi berhasil disimpan.');
}

}