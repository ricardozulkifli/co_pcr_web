<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KunjunganController;

/*
|--------------------------------------------------------------------------
| HOME
|--------------------------------------------------------------------------
*/

Route::get('/', [KunjunganController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home.page');

/*
|--------------------------------------------------------------------------
| PROFIL
|--------------------------------------------------------------------------
*/

Route::get('/profil', [HomeController::class, 'profil'])->name('profil');
Route::get('/sejarah', [HomeController::class, 'sejarah'])->name('sejarah');
Route::get('/visi-misi', [HomeController::class, 'visiMisi'])->name('visi_misi');

/*
|--------------------------------------------------------------------------
| KUNJUNGAN
|--------------------------------------------------------------------------
*/





Route::post('/kunjungan', [KunjunganController::class, 'store'])->name('kunjungan.store');
Route::put('/kunjungan/{id}', [KunjunganController::class, 'update'])->name('kunjungan.update');
Route::delete('/kunjungan/{id}', [KunjunganController::class, 'destroy'])->name('kunjungan.delete');

