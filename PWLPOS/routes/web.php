<?php

use App\Http\Controllers\AuthController;
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

// Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// //login
// Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
// Route::post('/login', [AuthController::class, 'login'])->name('login.process');
// Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route::get('/dashboard', function () {
//     return view('dashboard'); // Gantilah dengan halaman utama yang ingin dituju setelah login
// })->middleware('auth')->name('dashboard');

//profile
Route::get('/profile', function () {
    return view('profile.index');
})->name('profile');

//dashboard
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard');

//user
Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/user/tambah', [UserController::class, 'tambah'])->name('user.create');
Route::post('/user/tambah', [UserController::class, 'tambah_simpan'])->name('user.store');
Route::get('/user/ubah/{id}', [UserController::class, 'ubah'])->name('user.edit');
Route::post('/user/ubah/{id}', [UserController::class, 'ubah_simpan'])->name('user.update');
Route::get('/user/hapus/{id}', [UserController::class, 'hapus'])->name('user.delete');
Route::get('/user/data', [UserController::class, 'getData'])->name('user.data'); // JSON API

//kategori
Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');
Route::get('/kategori/data', [KategoriController::class, 'getData'])->name('kategori.data');
Route::get('/kategori/tambah', [KategoriController::class, 'tambah'])->name('kategori.create');
Route::post('/kategori/tambah', [KategoriController::class, 'tambah_simpan'])->name('kategori.store');
Route::get('/kategori/ubah/{id}', [KategoriController::class, 'ubah'])->name('kategori.edit');
//Route::post('/kategori/ubah/{id}', [KategoriController::class, 'ubah_simpan'])->name('kategori.update');
Route::post('/kategori/ubah/{id}', [KategoriController::class, 'ubah_simpan'])->name('kategori.update');
Route::delete('/kategori/hapus/{id}', [KategoriController::class, 'hapus'])->name('kategori.delete');