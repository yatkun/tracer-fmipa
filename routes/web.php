<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KuesionerController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\TraceradminController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard2', function () {
    return view('dashboard.index');
});

Route::get('/profile', function () {
    return view('dashboard.profile');
});





Route::get('masuk', [LoginController::class, 'index'])->name('masuk')->middleware('guest');
Route::get('daftar', [LoginController::class, 'daftar'])->middleware('guest');
Route::post('store', [LoginController::class, 'store'])->name('user.simpan');
Route::post('masuk', [LoginController::class, 'authenticate'])->name('proses.login');
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/logout', [LoginController::class, 'logout']);


// DASHBOARD ROUTE
Route::get('dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('profil', [DashboardController::class, 'profil'])->name('profil.index')->middleware(['auth', 'checkRole:alumni']);
Route::put('profil', [DashboardController::class, 'updateprofil'])->name('profil.update')->middleware(['auth', 'checkRole:alumni']);

// Kuisioner Route
Route::get('kuesioner', [KuesionerController::class, 'index'])->middleware(['auth', 'checkRole:alumni'])->name('kuesioner');
Route::get('kuesioner/isi', [KuesionerController::class, 'isi'])->name('kuesioner.isi')->middleware(['auth', 'checkRole:alumni']);
Route::post('kuesioner/store', [KuesionerController::class, 'store'])->name('kuesioner.store')->middleware(['auth', 'checkRole:alumni']);
Route::delete('kuesioner/{kuesioner}', [KuesionerController::class, 'destroy'])->name('kuesioner.destroy');
// Route::delete('kuesioner/{user}', 'KuesionerController@destroy')->name('kuesioner.destroy');
// Alumni Route
Route::get('data-alumni', [AlumniController::class, 'index'])->middleware(['auth', 'checkRole:admin']);
Route::get('data-alumni/lihat/{id}', [AlumniController::class, 'show'])->middleware(['auth', 'checkRole:admin']);
Route::delete('data-alumni/hapus/{user}', [AlumniController::class, 'destroy'])->name('data-alumni.destroy')->middleware(['auth', 'checkRole:admin']);

// Data Tracer Admin Route
Route::get('data-tracer', [TraceradminController::class, 'index'])->middleware(['auth', 'checkRole:admin']);
Route::get('data-tracer/lihat/{id}', [TraceradminController::class, 'show'])->middleware(['auth', 'checkRole:admin']);
Route::delete('data-tracer/hapus/{kuesioner}', [TraceradminController::class, 'destroy'])->name('data-tracer.destroy')->middleware(['auth', 'checkRole:admin']);

// Pengumuman
Route::get('pengumuman', [PengumumanController::class, 'index'])->middleware(['auth', 'checkRole:admin']);
Route::post('pengumuman', [PengumumanController::class, 'store'])->name('pengumuman.store')->middleware(['auth', 'checkRole:admin']);