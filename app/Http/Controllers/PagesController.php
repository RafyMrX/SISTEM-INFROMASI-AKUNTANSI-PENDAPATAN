<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
    	return view('public.index');
    }
    public function nota(){
    	return view('public.pemesanan.nota');
    }
}
