<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\UserController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [WelcomeController::class, 'index']);

Route::group(['prefix' => 'user'], function () {
    Route::get('/', [UserController::class, 'index']);          //Menampilkan halaman awal user
    Route::post('/list', [UserController::class, 'list']);      //Menampilkan data user dalam bentuk json
    Route::get('/create', [UserController::class, 'create']);   //Menampilkan halaman form tambah user
    Route::post('/', [UserController::class, 'store']);         //Menyimpan data user baru
    Route::get('/create_ajax', [UserController::class, 'create_ajax']);     // Menampilkan halaman form tambah user Ajax
    Route::post('/ajax', [UserController::class, 'store_ajax']);            // Menyimpan data user baru Ajax
    Route::get('/{id}', [UserController::class, 'show']);       //Menampilkan detail user
    Route::get('/{id}/edit', [UserController::class, 'edit']);  //Menampilkan halaman form edit user
    Route::put('/{id}', [UserController::class, 'update']);     //Menyimpan perubahan data user
    Route::get('/{id}/edit_ajax', [UserController::class, 'edit_ajax']);        // Menampilkan halaman form edit user Ajax
    Route::put('/{id}/update_ajax', [UserController::class, 'update_ajax']);    // Menyimpan perubahan data user Ajax
    Route::delete('/{id}', [UserController::class, 'destroy']); //Menghapus data user
});

Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index'); // Halaman Blade
Route::get('/kategori/data', [KategoriController::class, 'getData'])->name('kategori.data'); // Data JSON
Route::get('/kategori/create', [KategoriController::class, 'create'])->name('kategori.create');
Route::post('/kategori', [KategoriController::class, 'store']);
Route::get('/kategori/{id}/edit', [KategoriController::class, 'edit'])->name('kategori.edit');
Route::post('/kategori/{id}', [KategoriController::class, 'update'])->name('kategori.update');
Route::delete('/kategori/{id}', [KategoriController::class, 'destroy'])->name('kategori.destroy');