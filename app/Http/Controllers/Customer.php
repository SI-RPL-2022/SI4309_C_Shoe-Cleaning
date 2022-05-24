<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Customer extends Controller
{
    public function service()
    {
        return view('pages.user.service', ['pages' => 'Service']);
    }

    public function order(Request $request)
    {
        $user = Auth::user();

        $service = $request->get('service');
        if ($service === 'Standart Clean') {
            $count = $request->get('jumlah');
            $total = $count * 30000;
        } elseif ($service === 'Deep Clean') {
            $count = $request->get('jumlah');
            $total = $count * 40000;
        } elseif ($service === 'Premium Clean') {
            $count = $request->get('jumlah');
            $total = $count * 45000;
        } elseif ($service === 'Weekend Clean') {
            $count = $request->get('jumlah');
            $total = $count * 50000;
        }
        
        return view('pages.user.order', ['data' => $user], ['price' => $total, 'pages' => 'Checkouts']);
    }
}