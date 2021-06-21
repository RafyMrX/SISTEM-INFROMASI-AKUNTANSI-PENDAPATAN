<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
// HALAMAN AKUN

      public function RegisterPage(){
    	return view('public.akun.register');
    }
// PROSES LOGIN
    public function PostLogin(Request $request){
    	$email = $request->input('email');
		$password = $request->input('password');

		$user = User::where('email', $email)->first();

		if($user){
			if (Hash::check($password, $user->password)) {
				  $request->session()->put('SessionPublic', $user->id);
				  $request->session()->put('SessionNama', $user->name_pal);
				  return redirect('/')->with('toast_success', 'Berhasil Login');
			}else{
				return redirect('/login')->with('warning', 'Username/Password Salah');
			}
		}else{
				return redirect('/login')->with('warning', 'Username/Password Salah');
			}

    }

// PROSES LOGOUT
    public function Logout(){
    	session()->forget('SessionPublic');
    	session()->forget('SessionNama');
    	return redirect('/login')->with('toast_success', 'Berhasil Logout');   
    }

// PROSES REGISTER
    public function PostRegister(Request $request){
    	$request->validate($this->Validation());
 
    	$user = User::create(
    	[
    		'name_pal' => $request->input('name_pal'),
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
    		'name_pal' => 'required',
    		'name' => 'required',
    		'address' => 'required',
    		'phone' => 'required',
    		'email' => 'required|email|unique:users,email',
    		'password' => 'required|min:8|confirmed',
    		'password_confirmation' => 'required|min:8',
    	];
    }



    
}
