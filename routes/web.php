<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [App\Http\Controllers\Frontend\BerandaController::class, 'index'])->name('welcome');

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
