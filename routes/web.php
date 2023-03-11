<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LaporanController;
use App\Http\Controllers\Admin\MasyarakatController;
use App\Http\Controllers\Admin\PengaduanController;
use App\Http\Controllers\Admin\PetugasController;
use App\Http\Controllers\Admin\TanggapanController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Masyarakat
Route::get('/', [UserController::class, 'index'])->name('lapor.index');

Route::post('/login/auth', [UserController::class, 'login'])->name('lapor.login');

Route::get('/register', [UserController::class, 'formRegister'])->name('lapor.formRegister');
Route::post('/register/auth', [UserController::class, 'register'])->name('lapor.register');

Route::post('/store', [UserController::class, 'storePengaduan'])->name('lapor.store');
Route::get('/laporan/{siapa?}', [UserController::class, 'laporan'])->name('lapor.laporan');

Route::get('/logout', [UserController::class, 'logout'])->name('lapor.logout');

Route::prefix('admin')->group(function (){
    Route::get('/', [AdminController::class, 'formLogin'])->name('admin.formLogin');
    Route::post('/login', [AdminController::class, 'login'])->name('admin.login');
    Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    Route::resource('pengaduan', PengaduanController::class);
    Route::resource('petugas', PetugasController::class);
    Route::resource('masyarakat', MasyarakatController::class);
    Route::get('laporan', [LaporanController::class, 'index'])->name('laporan.index');

    Route::post('tanggapan/createOrUpdate', [TanggapanController::class, 'createOrUpdate'])->name('tanggapan.createOrUpdate');
});

Route::view('/hh', 'Admin.hhh');

