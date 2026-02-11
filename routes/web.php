<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KunjunganController;

/*
|--------------------------------------------------------------------------
| HOME
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
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

Route::get('/kunjungan', [KunjunganController::class, 'create'])
    ->name('kunjungan.form');

Route::post('/kunjungan', [KunjunganController::class, 'store'])
    ->name('kunjungan.store');
