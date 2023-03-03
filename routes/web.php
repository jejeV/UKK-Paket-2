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

Route::get('/admin', function () {
    return view('admin.login');
});
