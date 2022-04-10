<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function halamanlogin()
    {
        return view('login.Login');
    }

    public function postlogin(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->route('home');
        }
        return back()->with('loginError', 'Login Gagal !');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
    public function registrasi(Request $request)
    {
        return view('Login.Registrasi');
    }
    public function simpanregistrasi(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5'
        ]);
        if ($validate) {
            User::create([
                'name' => $request->name,
                'level' => 'user',
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'remember_token' => Str::random(60),
            ]);
        }
        return redirect()->route('login')->with('success', 'Registrasi Berhasil!');
    }
}
