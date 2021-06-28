<?php

namespace App\Http\Controllers;
use App\Models\Layanan;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $layanan = Layanan::all();
        return view('public.index', compact('layanan'));
    }
    public function nota()
    {
        return view('public.pemesanan.nota');
    }
    public function login()
    {
        return view('public.akun.login');
    }
    public function register()
    {
        return view('public.akun.register');
    }


    
}
