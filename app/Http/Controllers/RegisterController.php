<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Session;


class RegisterController extends Controller
{
    public function register()
    {
        return view('register');
    }
    
    public function actionregister(Request $request)
    {
        $existingUser = User::where('name', $request->name)->first();
       
        if ($existingUser) {
            return redirect('/register')->withInput()->withErrors(['name' => 'Username sudah terdaftar. Silakan pilih username lain.']);
        }
        $request->validate([
            'name' => 'required|unique:users',
            'password' => 'required',
        ]);
        $user = User::create([
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'role' => 'mahasiswa', // Menetapkan nilai "mahasiswa" pada kolom "role"
        ]);

        if ($user) {
            return redirect('/login')->with('message', 'Register Berhasil. Akun Anda sudah aktif. Silakan login menggunakan username dan password.');
        } else {
            return redirect('/register')->withInput()->with('error', 'Register Gagal. Silakan coba lagi.');
        }
    }
}