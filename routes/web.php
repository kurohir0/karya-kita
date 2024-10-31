<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PengajuanController as AdminPengajuanController;
use App\Http\Controllers\Admin\AkunController;
use App\Http\Controllers\Admin\KaryaController as AdminKaryaController;
use App\Http\Controllers\Dosen\DosenController;
use App\Http\Controllers\Dosen\KaryaController as DosenKaryaController;
use App\Http\Controllers\Dosen\PengajuanController as DosenPengajuanController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Mahasiswa\MahasiswaController;
use App\Http\Controllers\Mahasiswa\KaryaController as MahasiswaKaryaController;
use App\Http\Controllers\Mahasiswa\PengajuanController as MahasiswaPengajuanController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

// Route untuk Admin
Route::middleware(['auth', 'adminMiddleware'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::resource('/pengajuan', AdminPengajuanController::class)->only(['index', 'show', 'destroy']);
    Route::post('/pengajuan/{pengajuan}/confirm', [AdminPengajuanController::class, 'confirm'])->name('pengajuan.confirm');
    Route::resource('/karya', AdminKaryaController::class)->only(['index', 'show', 'destroy']);
    Route::resource('/akun', AkunController::class);
});

// Rute untuk Mahasiswa
Route::middleware(['auth', 'mahasiswaMiddleware'])->prefix('mahasiswa')->name('mahasiswa.')->group(function () {
    Route::get('/dashboard', [MahasiswaController::class, 'index'])->name('dashboard');
    Route::resource('/karya', MahasiswaKaryaController::class);
    Route::resource('/pengajuan', MahasiswaPengajuanController::class);
});

// Rute untuk Dosen
Route::middleware(['auth', 'dosenMiddleware'])->prefix('dosen')->name('dosen.')->group(function () {
    Route::get('/dashboard', [DosenController::class, 'index'])->name('dashboard');
    Route::get('/karya', [DosenKaryaController::class, 'index'])->name('karya');
    Route::resource('/pengajuan', DosenPengajuanController::class);
});

Route::get('/karya/{id}', [HomeController::class, 'show'])->name('karya.show');
Route::post('/karya/{id}/like', [HomeController::class, 'like'])->name('karya.like');
