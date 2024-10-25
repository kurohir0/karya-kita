<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AkunController;
use App\Http\Controllers\Admin\KaryaController as AdminKaryaController;
use App\Http\Controllers\Admin\PengajuanController;
use App\Http\Controllers\Dosen\DosenController;
use App\Http\Controllers\Mahasiswa\KaryaController;
use App\Http\Controllers\Mahasiswa\MahasiswaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

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

route::middleware(['auth', 'mahasiswaMiddleware'])->group(function () {
    route::get('dashboard', [MahasiswaController::class, 'index'])->name('dashboard');
    route::get('/mahasiswa/karya', [KaryaController::class, 'index'])->name('mahasiswa.karya');
});

route::middleware(['auth', 'adminMiddleware'])->group(function () {
    route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    route::get('/admin/pengajuan', [PengajuanController::class, 'index'])->name('admin.pengajuan');
    route::get('/admin/karya', [AdminKaryaController::class, 'index'])->name('admin.karya');
    route::get('/admin/akun', [AkunController::class, 'index'])->name('admin.akun');
});

route::middleware(['auth', 'dosenMiddleware'])->group(function () {
    route::get('/dosen/dashboard', [DosenController::class, 'index'])->name('dosen.dashboard');
});
