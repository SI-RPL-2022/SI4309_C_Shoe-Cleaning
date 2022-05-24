<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Authentication extends Controller
{
    public function index()
    {
        return view('pages.home', ['pages' => 'Home']);
    }

    public function registerPage()
    {
        return view('pages.login&register.register');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email:dns|unique:users',
            'no_hp' => 'required',
            'password' => 'required|confirmed',
            'setujukebijakan' => 'accepted'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);
        return redirect('/Login')->with('success', 'Registrasi Berhasil Silahkan Login');
    }
}