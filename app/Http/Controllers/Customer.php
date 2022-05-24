<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Customer extends Controller
{
    public function service()
    {
        return view('pages.user.service', ['pages' => 'Service']);
    }
}