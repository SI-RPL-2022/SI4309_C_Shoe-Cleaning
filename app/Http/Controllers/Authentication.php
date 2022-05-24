<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}