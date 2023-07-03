<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    //memanggil form register
    function index()
    {
        return view('pages.auth.register');
    }
    //memproses register
    function register(Request $request)
    {
        // //validasi user
        // $validatedUser = $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|unique:users',
        //     'password' => 'required|min:8',
        //     'contact' => 'required',
        // ]);
        //proses simpan data
        $userData = new User;
        $userData->name = $request->name;
        $userData->email = $request->email;
        $userData->contact = $request->contact;
        $userData->password = bcrypt($request->password);
        $userData->save();
        //alih halaman
        return redirect()->to('/login')->with('sukses', 'registrasi berhasil');
    }
}
