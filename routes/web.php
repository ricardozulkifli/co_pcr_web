<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/**
 * Home
 * /  -> redirect ke /home
 * /home -> halaman home
 */
Route::redirect('/', '/home')->name('root');

Route::get('/home', [HomeController::class, 'index'])->name('home');

/**
 * Menu Navbar (opsional tapi disarankan biar tidak 404)
 */
Route::get('/profil', [HomeController::class, 'profil'])->name('profil');
Route::get('/sejarah', [HomeController::class, 'sejarah'])->name('sejarah');
Route::get('/visi-misi', [HomeController::class, 'visiMisi'])->name('visi_misi');
