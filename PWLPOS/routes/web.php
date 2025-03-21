<?php

use App\Http\Controllers\ProfileController;
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

//profile
Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');

//user
Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/user/data', [UserController::class, 'getData'])->name('user.data'); 
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::post('/user/{id}', [UserController::class, 'update'])->name('user.update');
Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('user.destroy');
Route::post('/user', [UserController::class, 'store']);
// Route::post('/user/store', [UserController::class, 'tambah_simpan'])->name('user.store');

//kategori
Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index'); // Halaman Blade
Route::get('/kategori/data', [KategoriController::class, 'getData'])->name('kategori.data'); // Data JSON
Route::get('/kategori/create', [KategoriController::class, 'create'])->name('kategori.create');
Route::post('/kategori', [KategoriController::class, 'store']);
Route::get('/kategori/{id}/edit', [KategoriController::class, 'edit'])->name('kategori.edit');
Route::post('/kategori/{id}', [KategoriController::class, 'update'])->name('kategori.update');
Route::delete('/kategori/{id}', [KategoriController::class, 'destroy'])->name('kategori.destroy');