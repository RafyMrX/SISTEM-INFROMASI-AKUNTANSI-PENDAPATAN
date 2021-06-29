<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
	// HALAMAN AKUN

	public function RegisterPage()
	{
		return view('public.akun.register');
	}
	// PROSES LOGIN
	public function PostLogin(Request $request)
	{
		$email = $request->input('email');
		$password = $request->input('password');

		$user = User::where('email', $email)->first();

		if ($user) {
			if (Hash::check($password, $user->password)) {
				$request->session()->put('SessionPublic', $user->id);
				$request->session()->put('SessionNama', $user->name_pal);
				return redirect('/')->with('toast_success', 'Berhasil Login');
			} else {
				return redirect('/login')->with('warning', 'Username/Password Salah');
			}
		} else {
			return redirect('/login')->with('warning', 'Username/Password Salah');
		}
	}

	// PROSES LOGOUT
	public function Logout()
	{
		session()->forget('SessionPublic');
		session()->forget('SessionNama');
		return redirect('/login')->with('toast_success', 'Berhasil Logout');
	}

	// PROSES REGISTER
	public function PostRegister(Request $request)
	{
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

	public function Validation()
	{
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

	// Halaman Login Admin
	public function loginadmin()
	{
		return view('admin.index');
	}

	public function PostLoginAdmin(Request $request)
	{
		$username = $request->input('username');
		$password = $request->input('password');

		$admin = Anggota::where('username', $username)->first();

		if ($admin) {
			if (Hash::check($password, $admin->password)) {
				$request->session()->put('SessionAdmin', $admin->id_anggota);
				$request->session()->put('SessionNamaAdmin', $admin->nama_anggota);
				$request->session()->put('SessionJabatan', $admin->is_admin);
				return redirect('/dashboard')->with('toast_success', 'Berhasil Login');
			} else {
				return redirect('/loginadmin')->with('warning', 'Username/Password Salah');
			}
		} else {
			return redirect('/loginadmin')->with('warning', 'Username/Password Salah');
		}
	}
	public function logoutadmin()
	{
		session()->forget('SessionAdmin');
		session()->forget('SessionNamaAdmin');
		session()->forget('SessionJabatan');
		return redirect('/loginadmin')->with('toast_success', 'Berhasil Logout');
	}
}
