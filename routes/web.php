<?php

use App\Http\Controllers\LokasiController;
use App\Http\Controllers\BeritaController;
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



// CRUD berita
Route::get('/berita', [BeritaController::class, 'index']);
Route::prefix('berita')->group(function (){

    Route::get('/create', [BeritaController::class, 'create']);

    Route::post('/store', [BeritaController::class, 'store']);

    Route::get('/edit/{id}', [BeritaController::class, 'edit']);

    Route::post('/update', [BeritaController::class, 'update']);

    Route::get('/delete/{id}', [BeritaController::class, 'destroy']);

});
// CRUD lokasi
Route::get('/lokasi', [LokasiController::class, 'index']);
Route::prefix('lokasi')->group(function (){

    Route::get('/create', [LokasiController::class, 'create']);

    Route::post('/store', [LokasiController::class, 'store']);

    Route::get('/edit/{id}', [LokasiController::class, 'edit']);

    Route::post('/update', [LokasiController::class, 'update']);

    Route::get('/delete/{id}', [LokasiController::class, 'destroy']);

});