<?php


use App\Http\Controllers\Donatur\donaturController;
use App\Http\Controllers\Guru\guruController;
use App\Http\Controllers\Infaq\infaqController;
use App\Http\Controllers\Kepengurusan\kepengurusanController;
use App\Http\Controllers\Santri\santriController;
use App\Http\Controllers\Sistem\beritaController;
use App\Http\Controllers\Sistem\galeriController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/santri', [santriController::class, 'index'])->name('santri');
Route::get('/guru', [guruController::class, 'index'])->name('guru');
Route::get('/kepengurusan', [kepengurusanController::class, 'index'])->name('kepengurusan');
Route::get('/donatur', [donaturController::class, 'index'])->name('donatur');
Route::get('/infaq', [infaqController::class, 'index'])->name('infaq');
// Route::get('/berita', [beritaController::class, 'index'])->name('berita');
// Route::get('/galeri', [galeriController::class, 'index'])->name('galeri');