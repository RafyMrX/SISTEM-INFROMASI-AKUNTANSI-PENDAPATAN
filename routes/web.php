<?php

use App\Http\Controllers\AdmAnggotaController;
use App\Http\Controllers\AdmHomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdmKonsumenController;
use App\Http\Controllers\AdmLayananController;
use App\Http\Controllers\AdmLoginController;
use App\Http\Controllers\AdmPemesananController;
use App\Http\Controllers\AdmTransaksiController;
use App\Http\Controllers\AuthAdminController;
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
Route::get('/login', [PagesController::class, 'login'])->middleware('AlreadyLoginUser');
Route::get('/daftar', [AuthController::class, 'RegisterPage']);
Route::post('/postregister', [AuthController::class, 'PostRegister']);

// TRANSAKSI
Route::get('/transaksi', [TransaksiController::class, 'index']);
Route::get('/nota-pemesanan/{id}', [KonfirmasiController::class, 'show']);
Route::get('/konfirmasi/{id}', [KonfirmasiController::class, 'index']);
Route::post('/kirimbukti', [KonfirmasiController::class, 'store']);
Route::get('/pemesanan/{id}', [PemesananController::class, 'index']);
Route::post('/postpemesanan', [PemesananController::class, 'store']);




//
Route::post('/loginpost', [AuthController::class, 'PostLogin']);
Route::get('/logout', [AuthController::class, 'Logout']);


// ====================================================================
// Admin

// Route::group(['middleware']);
// Route Back End
Route::get('/loginadmin', [AuthController::class, 'loginadmin'])->middleware('AlreadyLoginAdmin');
Route::post('/admpost', [AuthController::class, 'PostLoginAdmin']);

Route::get('/logoutadmin', [AuthController::class, 'logoutadmin']);


//Home
Route::get('/dashboard', [AdmHomeController::class, 'index'])->middleware('LoginAdmin');



// Layanan
Route::get('/layanan', [AdmLayananController::class, 'index'])->middleware('LoginAdmin');
Route::get('/layanan/tambah', [AdmLayananController::class, 'create'])->middleware('LoginAdmin');
Route::post('/layanan/tambah', [AdmLayananController::class, 'store'])->middleware('LoginAdmin');
Route::get('/layanan/{id}', [AdmLayananController::class, 'edit']);
Route::get('/delete/{id}', [AdmLayananController::class, 'destroy']);
Route::post('/layanan/edit', [AdmLayananController::class, 'update']);

// Anggota
Route::get('/anggota', [AdmAnggotaController::class, 'index'])->middleware('LoginAdmin');
Route::get('/anggota/tambah', [AdmAnggotaController::class, 'create'])->middleware('LoginAdmin');
Route::post('/anggota/tambah', [AdmAnggotaController::class, 'store'])->middleware('LoginAdmin');
Route::get('/adelete/{id}', [AdmAnggotaController::class, 'destroy']);
Route::get('/anggota/{id}', [AdmAnggotaController::class, 'edit']);
Route::post('/anggota/edit', [AdmAnggotaController::class, 'update']);

// Konsumen
Route::get('/konsumen', [AdmKonsumenController::class, 'index'])->middleware('LoginAdmin');
Route::get('/kdelete/{id}', [AdmKonsumenController::class, 'destroy']);

// Pemesanan
Route::get('/admpemesanan', [AdmPemesananController::class, 'index'])->middleware('LoginAdmin');
Route::get('/detail-pemesanan/{id}', [AdmPemesananController::class, 'detail'])->middleware('LoginAdmin');
Route::get('/bukti/{id}', [AdmPemesananController::class, 'bukti']);

//Transaksi
// Route::get('/admtransaksi', [AdmTransaksiController::class, 'index']);
