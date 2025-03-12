<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/level', [Levelcontroller::class, 'index']);
Route::get('/kategori', [Kategoricontroller::class, 'index']);
Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/user/tambah', [UserController::class, 'tambah'])->name('user.create');
Route::post('/user/tambah', [UserController::class, 'tambah_simpan'])->name('user.store');
Route::get('/user/ubah/{id}', [UserController::class, 'ubah'])->name('user.edit');
Route::post('/user/ubah/{id}', [UserController::class, 'ubah_simpan'])->name('user.update');
Route::get('/user/hapus/{id}', [UserController::class, 'hapus'])->name('user.delete');
Route::get('/user/data', [UserController::class, 'getData'])->name('user.data'); // JSON API