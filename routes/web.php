<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/under', function () {
    return view('under-construction');
});


Route::get('/', [App\Http\Controllers\Frontend\BerandaController::class, 'index'])->name('welcome');
Route::get('/seminar', [App\Http\Controllers\Frontend\BerandaController::class, 'seminar'])->name('seminar');
Route::get('/tubel', [App\Http\Controllers\Frontend\BerandaController::class, 'tubel'])->name('tubel');

Auth::routes();


Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Frontend
Route::prefix('profile')->group(function () {
    Route::get('/sejarah', [App\Http\Controllers\Frontend\ProfileController::class, 'sejarah'])->name('sejarah');
    Route::get('/visi-misi', [App\Http\Controllers\Frontend\ProfileController::class, 'visiMisi'])->name('visi-misi');
    Route::get('/tugas-fungsi', [App\Http\Controllers\Frontend\ProfileController::class, 'tugasFungsi'])->name('tugas-fungsi');
    Route::get('/struktur-org', [App\Http\Controllers\Frontend\ProfileController::class, 'strukturOrg'])->name('struktur-org');
    Route::get('/widyaiswara', [App\Http\Controllers\Frontend\ProfileController::class, 'widyaiswara'])->name('widyaiswara');
    Route::get('/sarpras', [App\Http\Controllers\Frontend\ProfileController::class, 'sarpras'])->name('sarpras');
});

Route::prefix('layanan')->group(function () {
    Route::get('/pendidikan', [App\Http\Controllers\Frontend\LayananController::class, 'pendidikan'])->name('pendidikan');
    Route::get('/pelatihan', [App\Http\Controllers\Frontend\LayananController::class, 'pelatihan'])->name('pelatihan');
});

Route::prefix('media')->group(function () {
    Route::get('/berita', [App\Http\Controllers\Frontend\MediaController::class, 'berita'])->name('berita');
    Route::get('/detail-berita', [App\Http\Controllers\Frontend\MediaController::class, 'detailBerita'])->name('detail-berita');
    Route::get('/publikasi', [App\Http\Controllers\Frontend\MediaController::class, 'publikasi'])->name('publikasi');
    Route::get('/galeri', [App\Http\Controllers\Frontend\MediaController::class, 'galeri'])->name('galeri');
});

Route::prefix('dokumen')->group(function () {
    Route::get('/standar-pelayanan', [App\Http\Controllers\Frontend\DokumenController::class, 'standarPelayanan'])->name('standar-pelayanan');
    Route::get('/sop', [App\Http\Controllers\Frontend\DokumenController::class, 'sop'])->name('sop');
    Route::get('/lakip-laptah', [App\Http\Controllers\Frontend\DokumenController::class, 'lakipLaptah'])->name('lakip-laptah');
    Route::get('/renstra-ppsdma', [App\Http\Controllers\Frontend\DokumenController::class, 'renstraPPSDMA'])->name('renstra-ppsdma');
    Route::get('/renstra-bpsdm', [App\Http\Controllers\Frontend\DokumenController::class, 'renstraBPSDM'])->name('renstra-bpsdm');
    Route::get('/ikm', [App\Http\Controllers\Frontend\DokumenController::class, 'ikm'])->name('ikm');
    Route::get('/ipk', [App\Http\Controllers\Frontend\DokumenController::class, 'ipk'])->name('ipk');
    Route::get('/zona-integritas', [App\Http\Controllers\Frontend\DokumenController::class, 'zonaIntegritas'])->name('zona-integritas');
    Route::get('/peta-resiko', [App\Http\Controllers\Frontend\DokumenController::class, 'petaResiko'])->name('peta-resiko');
    Route::get('/kebijakan-anti-penyuapan', [App\Http\Controllers\Frontend\DokumenController::class, 'kebijakanAntiPenyuapan'])->name('kebijakan-anti-penyuapan');
    Route::get('/laporan-aktualisasi', [App\Http\Controllers\Frontend\DokumenController::class, 'laporanAktualisasi'])->name('laporan-aktualisasi');
    Route::get('/laporan-implementasi', [App\Http\Controllers\Frontend\DokumenController::class, 'laporanImplementasi'])->name('laporan-implementasi');
});

Route::get('/kontak', [App\Http\Controllers\Frontend\KontakController::class, 'kontak'])->name('kontak');

// Backend
