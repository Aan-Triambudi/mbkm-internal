<?php

namespace App\Http\Controllers\DPL;

use App\Models\CPL;
use App\Models\Logbook;
use Illuminate\Http\Request;
use App\Models\ProgramMagang;
use App\Models\KetercapaianCPL;
use App\Http\Controllers\Controller;

class KetercapaianCPLController extends Controller
{
    
    public function listcpl()
    {
        $logbooks = Logbook::with('mahasiswa')->get();

        // Mengelompokkan logbook berdasarkan NIM mahasiswa
        $groupedLogbooks = $logbooks->groupBy('mahasiswa.nim');

        return view('backend.Dash-DPL.pages.cpl.list-cpl', compact('groupedLogbooks'));
    }
  

    public function update(Request $request, $id)
    {
        // Validasi data yang diterima dari formulir
        $request->validate([
            'jenis_cpl' => 'required|exists:cpl,id', // Pastikan jenis_cpl yang dipilih ada dalam tabel cpls
        ]);

        // Dapatkan data KetercapaianCPL berdasarkan ID
        $ketercapaianCPL = KetercapaianCPL::findOrFail($id);

        // Perbarui jenis_cpl dengan nilai yang baru
        $ketercapaianCPL->id_cpl = $request->input('jenis_cpl');
        $ketercapaianCPL->save();

        // Redirect pengguna kembali ke halaman yang benar atau tampilkan pesan sukses
        return redirect()->route('ketercapaianCPL.show', ['id' => $ketercapaianCPL->mahasiswa->id])->with('success', 'Data Ketercapaian CPL berhasil diperbarui.');
    }

    public function show($id)
    {
        $ketercapaianCPLs = KetercapaianCPL::all();
        $listOfCPLs = CPL::all(); 
        $groupedLogbooks = Logbook::with('mahasiswa', 'programMagang')->where('id_mahasiswa', $id)
            ->get()
            ->groupBy('mahasiswa.id');
        return view('backend.Dash-DPL.pages.cpl.show-bukti', compact('groupedLogbooks', 'ketercapaianCPLs', 'listOfCPLs'));
    }
}