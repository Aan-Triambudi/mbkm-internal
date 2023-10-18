<?php

namespace App\Http\Controllers\Mhs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MhsLaporanAkhirController extends Controller
{
    public function index()
    {

        return view('backend.Dash-Mhs.pages.laporan-akhir.index');
    }
    
    public function uploadPdf(Request $request)
    {
        $request->validate([
            'pdf_file' => 'required|mimes:pdf|max:10240', // Hanya menerima file PDF maksimal 10MB
        ]);

        $file = $request->file('pdf_file');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $filePath = $file->storeAs('pdfs', $fileName); // File akan disimpan di folder 'pdfs' di dalam direktori 'storage/app'

        // Lakukan operasi penyimpanan file ke database atau yang diperlukan sesuai kebutuhan aplikasi Anda
        // Contoh: Pdf::create(['file_path' => $filePath, 'file_name' => $fileName]);

        return redirect()->route('pdf.form')->with('success', 'File PDF berhasil diunggah.');
    }
}