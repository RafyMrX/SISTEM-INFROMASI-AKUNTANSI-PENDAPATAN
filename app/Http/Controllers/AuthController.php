<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function LoginPage(){
    	return view('public.akun.login');
    }

      public function RegisterPage(){
    	return view('public.akun.register');
    }

    public function PostRegister(Request $request){
    	$request->validate($this->Validation());
 
    	$user = User::create(
    	[
    		'name' => $request->input('name'),
    		'address' => $request->input('address'),
    		'phone' => $request->input('phone'),
    		'email' => $request->input('email'),
    		'password' => bcrypt($request->input('password')),
 
    	]
    );
    
    	return redirect('/login')->with('success', 'Berhasil Mendaftar');


    }

    public function Validation(){
    	return [
    		'name' => 'required',
    		'address' => 'required',
    		'phone' => 'required',
    		'email' => 'required|email|unique:users,email',
    		'password' => 'required|min:8|confirmed',
    		'password_confirmation' => 'required|min:8',
    	];
    }



    
}
