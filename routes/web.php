<?php

use App\Http\Controllers\AdmAnggotaController;
use App\Http\Controllers\AdmHomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdmKonsumenController;
use App\Http\Controllers\AdmLayananController;
use App\Http\Controllers\AdmLoginController;
use App\Http\Controllers\AdmPemesananController;
use App\Http\Controllers\AdmTransaksiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\KonfirmasiController;

// ROUTE FRONT END
Route::get('/', [PagesController::class, 'index']);

// PEMESANAN
Route::get('/pemesanan', [PemesananController::class, 'index']);
Route::get('/nota-pemesanan', [PagesController::class, 'nota']);
Route::get('/login', [PagesController::class, 'login']);
Route::get('/register', [PagesController::class, 'register']);


// TRANSAKSI
Route::get('/transaksi', [TransaksiController::class, 'index']);
Route::get('/konfirmasi', [KonfirmasiController::class, 'index']);



// ====================================================================
// Admin

// Route::group(['middleware']);
// Route Back End
// Route::get('/login', [AdmLoginController::class, 'index']);

//Home
Route::get('/home', [AdmHomeController::class, 'index']);

// Layanan
Route::get('/layanan', [AdmLayananController::class, 'index']);
Route::get('/layanan/tambah', [AdmLayananController::class, 'create']);
Route::post('/layanan/tambah', [AdmLayananController::class, 'store']);
Route::get('/layanan/{id}', [AdmLayananController::class, 'edit']);
Route::get('/delete/{id}', [AdmLayananController::class, 'destroy']);
Route::get('/layanan/edit', [AdmLayananController::class, 'edit']);
Route::post('/layanan/{id}', [AdmLayananController::class, 'update']);

// Anggota
Route::get('/anggota', [AdmAnggotaController::class, 'index']);
Route::get('/anggota/tambah', [AdmAnggotaController::class, 'create']);
Route::post('/anggota/tambah', [AdmAnggotaController::class, 'store']);
Route::get('/adelete/{id}', [AdmAnggotaController::class, 'destroy']);
Route::get('/anggota/edit', [AdmAnggotaController::class, 'edit']);
Route::get('/anggota/{id}', [AdmAnggotaController::class, 'update']);

// Konsumen
Route::get('/konsumen', [AdmKonsumenController::class, 'index']);

// Pemesanan
Route::get('/pemesanan', [AdmPemesananController::class, 'index']);

//Transaksi
Route::get('/transaksi', [AdmTransaksiController::class, 'index']);
