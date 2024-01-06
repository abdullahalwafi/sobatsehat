<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KegiatanController;
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

Route::get('/dashboard', function () {
    return view('admin.dashboard');
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



