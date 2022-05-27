<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Admin extends Controller
{
    public function indexAdmin()
    {
        $orders = DB::table('orders')->where('status_cucian', '!=', 'Selesai')->orderBy('created_at', 'asc')->get();

        return view('pages.admin.home', ['pages' => 'Home'], compact('orders'));
    }

    public function product()
    {
        return view('pages.admin.product', ['pages' => 'Product']);
    }

    public function addproduct()
    {
        return view('pages.admin.addproduct', ['pages' => 'Add Product']);
    }
}