<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\KonfirmasiController;
use App\Http\Controllers\AuthController;

// ROUTE FRONT END
Route::get('/',[PagesController::class, 'index']);

// PEMESANAN
Route::get('/pemesanan',[PemesananController::class, 'index']);
Route::get('/nota-pemesanan',[PagesController::class, 'nota']);
Route::get('/login',[PagesController::class, 'login']);
Route::get('/register',[PagesController::class, 'register']);

// AKUN 
Route::get('/login',[AuthController::class, 'LoginPage'])->middleware('AlreadyLoginUser');
Route::get('/logout',[AuthController::class, 'Logout']);
Route::get('/daftar',[AuthController::class, 'RegisterPage']);
Route::post('/postregister',[AuthController::class, 'PostRegister']);
Route::post('/loginpost',[AuthController::class, 'PostLogin']);

// TRANSAKSI
Route::get('/transaksi',[TransaksiController::class, 'index']);
Route::get('/konfirmasi',[KonfirmasiController::class, 'index']);


