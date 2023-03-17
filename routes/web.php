<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SPPController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//kelas
Route::get('/spp/index', [SPPController::class, 'index'])->name('spp.index');
Route::get('/spp/create', [SPPController::class, 'create'])->name('spp.create');
Route::post('/spp/create', [SPPController::class, 'store'])->name('spp.store');
Route::get('/spp/update/{id_spp}', [SPPController::class, 'edit'])->name('spp.edit');
Route::post('/spp/update/{id}', [SPPController::class, 'update'])->name('spp.update');
Route::get('/spp/delete{id}', [SPPController::class, 'destroy'])->name('spp.delete');

//kelas
Route::get('/kelas/index', [KelasController::class, 'index'])->name('kelas.index');
Route::get('/kelas/create', [KelasController::class, 'create'])->name('kelas.create');
Route::post('/kelas/create', [KelasController::class, 'store'])->name('kelas.store');
Route::get('/kelas/update/{id_kelas}', [KelasController::class, 'edit'])->name('kelas.edit');
Route::post('/kelas/update/{id}', [KelasController::class, 'update'])->name('kelas.update');
Route::get('/kelas/delete{id}', [KelasController::class, 'destroy'])->name('kelas.delete');

//kelas
Route::get('/siswa/index', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa/create', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/update/{id}', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::post('/siswa/update/{id}', [SiswaController::class, 'update'])->name('siswa.update');
Route::get('/siswa/delete{id}', [SiswaController::class, 'destroy'])->name('siswa.delete');

//user
Route::get('/user/index', [UserController::class, 'index'])->name('user.index');
Route::get('/user/update/{id}', [UserController::class, 'edit'])->name('user.edit');
Route::post('/user/update/{id}', [UserController::class, 'update'])->name('user.update');
Route::get('/user/delete{id}', [UserController::class, 'destroy'])->name('user.delete');



