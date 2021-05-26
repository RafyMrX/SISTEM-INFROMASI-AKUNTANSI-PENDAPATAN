<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PemesananController;


Route::get('/',[PagesController::class, 'index']);
Route::get('/pemesanan',[PemesananController::class, 'index']);
Route::get('/nota-pemesanan',[PagesController::class, 'nota']);
Route::get('/login',[PagesController::class, 'login']);
Route::get('/register',[PagesController::class, 'register']);

