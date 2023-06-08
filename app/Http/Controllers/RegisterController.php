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
        $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);
        $users = User::create([
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'role' => 'mahasiswa', // Menetapkan nilai "mahasiswa" pada kolom "role"
        ]);

        Session::flash('message', 'Register Berhasil. Akun Anda sudah Aktif silahkan login menggunakan username dan password.');
        return redirect('/login');
    }
}