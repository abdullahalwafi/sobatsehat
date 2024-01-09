<?php

use App\Http\Controllers\LokasiController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KegiatanController;
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
// Route::get('/admin', function () {
//     return view('admin.dashboard');
// });

Route::prefix('dashboard')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    });

    // CRUD berita
    Route::get('/berita', [BeritaController::class, 'index']);
    Route::prefix('berita')->group(function () {

        Route::get('/create', [BeritaController::class, 'create']);

        Route::post('/store', [BeritaController::class, 'store']);

        Route::get('/edit/{id}', [BeritaController::class, 'edit']);

        Route::post('/update/{id}', [BeritaController::class, 'update']);

        Route::get('/delete/{id}', [BeritaController::class, 'destroy']);

    });
    // CRUD lokasi
    Route::get('/lokasi', [LokasiController::class, 'index']);
    Route::prefix('lokasi')->group(function () {

        Route::get('/create', [LokasiController::class, 'create']);

        Route::post('/store', [LokasiController::class, 'store']);

        Route::get('/edit/{id}', [LokasiController::class, 'edit']);

        Route::post('/update/{id}', [LokasiController::class, 'update']);

        Route::get('/delete/{id}', [LokasiController::class, 'destroy']);

    });


    // Bikin routing ke kegiatan
    Route::get('/kegiatan', [KegiatanController::class, 'kegiatan']);

    Route::get('/kegiatan/create', [KegiatanController::class, 'create']);
    // bikin routing untuk kirim data menggunakan store
    Route::post('/kegiatan/store', [KegiatanController::class, 'store']);
    // bikin routing untuk edit data menggunakan update
    Route::put('/kegiatan/update/{id}', [KegiatanController::class, 'update']);
    // bikin routing edit
    Route::get('/kegiatan/edit/{id}', [KegiatanController::class, 'edit']);
    // bikin routing untuk delet data data menggunakan destroy
    Route::get('/kegiatan/delete/{id}', [KegiatanController::class, 'destroy']);



    // Bikin routing ke kategori
    Route::get('/kategori', [KategoriController::class, 'kategori']);

    Route::get('/kategori/create', [KategoriController::class, 'create']);
    // bikin routing untuk kirim data menggunakan store
    Route::post('/kategori/store', [KategoriController::class, 'store']);
    // bikin routing untuk edit data menggunakan update
    Route::put('/kategori/update/{id}', [KategoriController::class, 'update']);
    // bikin routing edit
    Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit']);
    // bikin routing untuk delet data data menggunakan destroy
    Route::get('/kategori/delete/{id}', [KategoriController::class, 'destroy']);

    Route::get('/user', [UserController::class, 'index']);

    Route::get('/user/create', [UserController::class, 'create']);
    // bikin routing untuk kirim data menggunakan store
    Route::post('/user/store', [UserController::class, 'store']);
    // bikin routing untuk edit data menggunakan update
    Route::put('/user/update/{id}', [UserController::class, 'update']);
    // bikin routing edit
    Route::get('/user/edit/{id}', [UserController::class, 'edit']);
    // bikin routing untuk delet data data menggunakan destroy
    Route::get('/user/delete/{id}', [UserController::class, 'destroy']);
});
