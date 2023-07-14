<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StockBarangController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\BarangKeluarController;
use App\Http\Controllers\KategoryController;
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

// <li class="nav-item"><a class="nav-link" href="/barang-masuk"><span style="font-size: 18px">Barang Masuk</span></a></li>
//                     <li class="nav-item"><a class="nav-link" href="/barang-keluar"><span style="font-size: 18px">Barang keluar</span></a></li>
//                     <li class="nav-item"><a class="nav-link" href="/kategori"><span style="font-size: 18px">Kategori</span></a></li>
//                     <li class="nav-item"><a class="nav-link" href="/users"><span style="font-size: 18px">Users</span></a></li>

Route::middleware('auth')->group(function () {
    Route::get('/', [DashboardController::class, 'index']);
    Route::get('/barang-masuk', [StockBarangController::class, 'index']);

    Route::get('/add-barang', [BarangMasukController::class, 'create']);
    Route::post('/add-barang', [BarangMasukController::class, 'store']);
    Route::get('/update-barang/{id}', [BarangMasukController::class, 'edit']);
    Route::post('/update-barang', [BarangMasukController::class, 'update']);
    Route::post('/delete-barang/{id}', [BarangMasukController::class, 'delete']);

    Route::get('/in-barang', [BarangMasukController::class, 'editBarangMasuk']);
    Route::post('/in-barang', [BarangMasukController::class, 'updateBarangMasuk']);

    Route::get('/out-barang', [BarangKeluarController::class, 'editBarangKeluar']);
    Route::post('/out-barang', [BarangKeluarController::class, 'updateBarangKeluar']);

    Route::get('/kategori', [KategoryController::class, 'index']);
    Route::get('/add-kategori', [KategoryController::class, 'create']);
    Route::post('/add-kategori', [KategoryController::class, 'store']);
    Route::get('/edit-kategori/{id}', [KategoryController::class, 'edit']);
    Route::post('/edit-kategori', [KategoryController::class, 'update']);
    Route::post('/delete-kategori/{id}', [KategoryController::class, 'delete']);

    Route::get('/users', [UserController::class, 'index']);
    Route::get('/add-user', [UserController::class, 'create']);
    Route::post('/add-user', [UserController::class, 'store']);
    Route::get('/update-user/{id}', [UserController::class, 'edit']);
    Route::post('/update-user', [UserController::class, 'update']);
    Route::post('/delete-user/{id}', [UserController::class, 'destroy']);

    Route::post('/logout', [AuthController::class,'logout']);
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/loginCheck', [AuthController::class, 'loginCheck']);
});
