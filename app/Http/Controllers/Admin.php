<?php

namespace App\Http\Controllers;

use App\Models\Product;
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
        $products = DB::table('products')->get();
        return view('pages.admin.product', ['pages' => 'Product'], compact('products'));
    }

    public function addproduct()
    {
        return view('pages.admin.addproduct', ['pages' => 'Add Product']);
    }

    public function storeProduct(Request $request)
    {
        // return $request->file('gambar')->store('product-images');

        $validatedData = $request->validate([
            'gambar' => 'image|file|required',
            'nama_produk' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required'
        ]);

        $validatedData['gambar'] = $request->file('gambar')->store('product-images');

        Product::create($validatedData);
        return redirect('/Product')->with('success', 'Produk Berhasil Ditambahkan!');
    }
}