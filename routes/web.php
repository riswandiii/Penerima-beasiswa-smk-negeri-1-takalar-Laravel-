<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KehadiranController;
use App\Http\Controllers\LoginRegisterController;
use App\Http\Controllers\MatriksController;
use App\Http\Controllers\NilaiiController;
use App\Http\Controllers\NormalisasiController;
use App\Http\Controllers\PerilakuController;
use App\Http\Controllers\PrestasiAkademikController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Tesssss

// Route untuk masuk ke HomeController
Route::get('/', [HomeController::class, 'index'])->middleware('auth');

// Route untuk masuk di LoginRegisterController
Route::get('/login', [LoginRegisterController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [LoginRegisterController::class, 'loginProses']);
Route::get('/register', [LoginRegisterController::class, 'register'])->middleware('guest');
Route::post('/register', [LoginRegisterController::class, 'registerProses'])->middleware('guest');
Route::post('/logout', [LoginRegisterController::class, 'logout'])->middleware('auth');
 
// Route untuk masuk di DashboardController
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('admin');

// Route untuk masuk di NilaiiController
Route::resource('/dashboard/kriteria-penilaian', NilaiiController::class)->middleware('admin');

// Route untuk masuk di KehadiranController
Route::resource('/dashboard/kriteria-absensi', KehadiranController::class)->middleware('admin');

// Route untuk masuk di PerilakuController
Route::resource('/dashboard/kriteria-perilaku', PerilakuController::class)->middleware('admin');

// Route untuk masuk di PrestasiAkademikController 
Route::resource('/dashboard/kriteria-prestasi', PrestasiAkademikController::class)->middleware('admin');

// Route untuk masuk di SiswaController
Route::resource('/dashboard/calon-penerima', SiswaController::class)->middleware('admin');

// Route untuk masuk di MatriksController
Route::resource('/dashboard/matriks-keputusan', MatriksController::class)->middleware('admin');

// Route untuk masuk di NormalisasiController
Route::get('/dashboard/normalisasi-matriks-x', [NormalisasiController::class, 'index'])->middleware('admin');

// Route untuk masuk di HomeController
Route::get('/penerima-beasiswa', [HomeController::class, 'penerima'])->middleware('auth');

// route untuk masuk di UserController
Route::get('/my-profile', [UserController::class, 'index'])->middleware('auth');