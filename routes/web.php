<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthPLController;
use App\Http\Controllers\AuthDPLController;
use App\Http\Controllers\AuthMhsController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\AuthMitraController;
use App\Http\Controllers\DPL\NilaiController;
use App\Http\Controllers\DashboardsController;
use App\Http\Controllers\AuthKaprodiController;
use App\Http\Controllers\DPL\LogbookController;
use App\Http\Controllers\PL\KegiatanController;
use App\Http\Controllers\PL\NilaiAwalController;
use App\Http\Controllers\Kaprodi\DosenController;
use App\Http\Controllers\PL\KompetensiController;
use App\Http\Controllers\PL\LogbookMhsController;
use App\Http\Controllers\PL\NilaiAkhirController;
use App\Http\Controllers\Mhs\MhsLogbookController;
use App\Http\Controllers\DPL\LaporanAkhirController;
use App\Http\Controllers\Mitra\MitraPLMhsController;
use App\Http\Controllers\Mitra\LaporanMitraController;
use App\Http\Controllers\DPL\KetercapaianCPLController;
use App\Http\Controllers\DPL\LaporanEvaluasiController;
use App\Http\Controllers\Mhs\MhsLaporanAkhirController;
use App\Http\Controllers\Mitra\MitraDaftarPLController;
use App\Http\Controllers\Kaprodi\KaprodiMitraController;
use App\Http\Controllers\Mitra\MitraLogbookMhsController;
use App\Http\Controllers\Mitra\MitraSertifikatController;
use App\Http\Controllers\Mhs\MhsLaporanMingguanController;
use App\Http\Controllers\Kaprodi\KaprodiLogbookMhsController;
use App\Http\Controllers\Kaprodi\KaprodiLaporanAkhirController;
use App\Http\Controllers\Kaprodi\KaprodiKonversiNilaiController;

// Dashboards || Backends || Pages Main
Route::get('/dashboard-adminprodi', [DashboardsController::class, 'admin']);
Route::get('/dashboard-dpl', [DashboardsController::class, 'dpl']);
Route::get('/dashboard-kaprodi', [DashboardsController::class, 'kaprodi']);
Route::get('/dashboard-mhs', [DashboardsController::class, 'mhs']);
Route::get('/dashboard-mitra', [DashboardsController::class, 'mitra']);
Route::get('/dashboard-pl', [DashboardsController::class, 'pl']);
// Dashboards END || Backends || Pages Main


// Homepage START || Frontends || Pages Main
Route::get('/', [HomepageController::class, 'homepage']);
// Homepage END || Frontends || Pages Main


// Layouts DPL Start
Route::get('/login-dpl', [AuthDPLController::class,  'login_dpl']);
Route::get('/dpl/laporan-mhs/list-logbook', [LogbookController::class, 'listlogbook'])->name('logbookmhs.listlogbook');
Route::get('/dpl/laporan-mhs/logbook-mhs/{id}', [LogbookController::class, 'show']);

// Fitur LogBook Start
Route::post('/dpl/laporan-mhs/logbook-mhs/confirm', [LogbookController::class, 'confirm'])->name('logbookmhs.confirm');
// Layouts DPL End

Route::get('/dpl/laporan-mhs/laporan-akhir', [LaporanAkhirController::class, 'listlapakhir'])->name('lapakhirmhs.listlapakhir');
Route::get('/dpl/laporan-mhs/laporan-akhir/{id}', [LaporanAkhirController::class, 'show']);
Route::get('/dpl/konvers/list-cpl', [KetercapaianCPLController::class, 'listcpl'])->name('ketercapaianCPL.listcpl');
Route::get('/dpl/konvers/list-cpl/{id}', [KetercapaianCPLController::class, 'show'])->name('ketercapaianCPL.show');
Route::patch('/dpl/konvers/list-cpl/update/{id}', [KetercapaianCPLController::class, 'update'])->name('ketercapaianCPL.update');
Route::get('/dpl/konvers/list-nilai', [NilaiController::class, 'listnilai'])->name('listkonversinilai.listnilai');
Route::get('/dpl/konvers/list-nilai/{id}', [NilaiController::class, 'show'])->name('listkonversinilai.show');
Route::patch('/dpl/konvers/nilai/update/{id}', [NilaiController::class, 'update'])->name('nilai.update');
Route::get('/dpl/laporan-evaluasi', [LaporanEvaluasiController::class,    'listlaposi'])->name('listlaporanevaluasi.listlaposi');
Route::get('/dpl/laporan-evaluasi/{id}', [LaporanEvaluasiController::class,    'show'])->name('listlaporanevaluasi.show');
Route::get('/dpl/download/certificate/{file}',  [LaporanEvaluasiController::class,    'download'])->name('download.certificate');
Route::get('/dpl/view/certificate/{file}',[LaporanEvaluasiController::class,    'view'])->name('view.certificate');
Route::post('/dpl/evaluasi/add-comment/{id}', [LaporanEvaluasiController::class,    'addComment'])->name('evaluasi.add.comment');
// Layouts DPL END


// Layouts Kaprodi Start
Route::get('/login-kaprodi', [AuthKaprodiController::class,  'login_kaprodi']);
Route::get('/kaprodi/data-dosen', [DosenController::class,  'index']);
Route::get('/kaprodi/laporan-mhs/list-logbook', [KaprodiLogbookMhsController::class,  'listlogbook'])->name('logbook.listlogbook');
Route::get('/kaprodi/laporan-mhs/list-logbook/{id}', [KaprodiLogbookMhsController::class, 'show'])->name('logbook.show');
Route::get('/kaprodi/laporan-mhs/list-lapakhir', [KaprodiLaporanAkhirController::class,  'listlapakhir'])->name('lapakhir.listlapakhir');
Route::get('/kaprodi/laporan-mhs/list-lapakhir/{id}', [KaprodiLaporanAkhirController::class,  'show'])->name('lapakhir.show');
Route::get('/kaprodi/laporan-mhs/list-konversinilai', [KaprodiKonversiNilaiController::class,  'listkonversinilai'])->name('konversi-nilai.listkonversinilai');
Route::get('/kaprodi/laporan-mhs/list-konversinilai/{id}', [KaprodiKonversiNilaiController::class,  'show'])->name('konversi-nilai.show');
Route::patch('/kaprodi/laporan-mhs/list-konversinilai/{id}', [KaprodiKonversiNilaiController::class, 'update'])->name('konversi-nilai.update');
Route::get('/kaprodi/mitra/program-magang', [KaprodiMitraController::class,  'index']);
Route::post('/program-magang/konfirmasi/{id}', [KaprodiMitraController::class,  'konfirmasi'])->name('program-magang.konfirmasi');
// Layouts Kaprodi END


// Layouts PL Start
Route::get('/login-pl', [AuthPLController::class,  'login_pl']);
Route::get('/master-program/detail-kegiatan', [KegiatanController::class,  'index'])->name('kegiatan.index');
Route::patch('/master-program/detail-kegiatan/update/{id}', [KegiatanController::class,  'update'])->name('update.kegiatan');
Route::patch('kegiatan/{id}/update-posisi', [KegiatanController::class, 'updatePosisiMahasiswa'])->name('update.posisi');
Route::get('/master-program/detail-penilaian-kompetensi', [KompetensiController::class,  'index'])->name('kompetensi.index');
Route::patch('/master-program/detail-penilaian-kompetensi/{id}', [KompetensiController::class, 'update'])->name('update.kompetensi');
Route::get('/master-program/list-logbook', [LogbookMhsController::class,  'listlogbook'])->name('logbook.listlogbook');
Route::get('/master-program/list-logbook/{id}', [LogbookMhsController::class,  'show'])->name('logbook.show');
Route::get('/master-program/list-niwal', [NilaiAwalController::class,  'listniwal'])->name('nilaiawal.listniwal');
Route::get('/master-program/list-niwal/{id}', [NilaiAwalController::class,  'show'])->name('nilaiawal.show');
Route::get('/master-program/list-nikhir', [NilaiAkhirController::class,  'listnikhir'])->name('nilaiakhir.listnikhir');
Route::get('/master-program/list-nikhir/{id}', [NilaiAkhirController::class,  'show'])->name('nilaiakhir.show');
// Layouts PL END


// Layouts Mitra Start
Route::get('/login-mitra', [AuthMitraController::class,  'login_mitra']);
Route::get('/master-data/pl-mitra', [MitraDaftarPLController::class,  'index']);
Route::get('/master-data/laporan-mitra', [LaporanMitraController::class,  'index']);
Route::patch('/laporan-mitra/{id}/add-comment', [LaporanMitraController::class, 'addComment'])->name('add.comment');
Route::get('/download-certificate/{file}', [LaporanMitraController::class, 'downloadCertificate'])->name('download.certificate');
Route::get('/view-certificate/{file}', [LaporanMitraController::class, 'viewCertificate'])->name('view.certificate');
Route::get('/master-data/sertifikat', [MitraSertifikatController::class,  'index']);
Route::get('/mitra/logbook-mahasiswa', [MitraLogbookMhsController::class,  'index']);
Route::get('/master-data/pl-mahasiswa', [MitraPLMhsController::class,  'index']);
Route::patch('/pendamping-lapang-mahasiswa/update/{id}', [MitraPLMhsController::class, 'update'])->name('updatePendampingLapang');
// Layouts Mitra END


// Layouts Mhs Start
Route::get('/login-mhs', [AuthMhsController::class,  'login_mhs']);
Route::get('/mhs/logbook-mhs', [MhsLogbookController::class,  'index'])->name('logbook.index');
// Rute untuk menangani pengiriman formulir logbook
Route::post('/mhs/logbook/submit', [MhsLogbookController::class, 'submitLogbook'])->name('submit.logbook');
Route::get('/mhs/laporan-mingguan', [MhsLaporanMingguanController::class,  'index'])->name('laporan.index');
Route::post('/mhs/laporan/submit', [MhsLaporanMingguanController::class, 'submit'])->name('laporan.submit');
Route::get('/mhs/laporan-akhir', [MhsLaporanAkhirController::class,  'index']);
Route::post('/mhs/upload-pdf', [MhsLaporanAkhirController::class, 'uploadPdf'])->name('upload.pdf');
// Layouts Mhs END