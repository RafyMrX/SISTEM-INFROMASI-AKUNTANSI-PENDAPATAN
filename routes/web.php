<?php

use App\Http\Controllers\AdmHomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdmLoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\KonfirmasiController;
use App\Http\Controllers\AuthController;

// ROUTE FRONT END
Route::get('/', [PagesController::class, 'index']);

// PEMESANAN
Route::get('/pemesanan', [PemesananController::class, 'index']);
Route::get('/nota-pemesanan', [PagesController::class, 'nota']);
Route::get('/login', [PagesController::class, 'login']);
Route::get('/register', [PagesController::class, 'register']);

// AKUN 
Route::get('/login',[AuthController::class, 'LoginPage']);
Route::get('/daftar',[AuthController::class, 'RegisterPage']);
Route::post('/postregister',[AuthController::class, 'PostRegister']);

// TRANSAKSI
Route::get('/transaksi', [TransaksiController::class, 'index']);
Route::get('/konfirmasi', [KonfirmasiController::class, 'index']);



// ====================================================================
// Admin

// Route Back End
Route::get('/login', [AdmLoginController::class, 'index']);

//Home
Route::get('/home', [AdmHomeController::class, 'index']);

// Layanan
// Route::get('/home', [AdminController::class, 'transaksi']);

// Konsumen
// Route::get('/home', [AdminController::class, 'transaksi']);

// Pemesanan
// Route::get('/home', [AdminController::class, 'transaksi']);

//Transaksi
// Route::get('/home', [AdminController::class, 'transaksi']);
