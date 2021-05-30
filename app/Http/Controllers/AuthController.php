<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function LoginPage(){
    	return view('public.akun.login');
    }

      public function RegisterPage(){
    	return view('public.akun.register');
    }
}
