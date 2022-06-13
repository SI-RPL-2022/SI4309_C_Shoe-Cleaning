<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Customer extends Controller
{
    public function service()
    {
        $products = DB::table('products')->get();
        return view('pages.user.service', ['pages' => 'Service'], compact('products'));
    }

    public function order(Request $request)
    {
        $user = Auth::user();
        $count = $request->get('jumlah');
        $harga = $request->get('harga');
        $total = $count * $harga;
        
        return view('pages.user.order', ['data' => $user], ['price' => $total, 'pages' => 'Checkouts']);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_produk' => 'required',
            'user_id' => 'required',
            'jumlah' => 'required',
            'harga' => 'required',
            'nama_pemesan' => 'required',
            'no_hp' => 'required',
            'tanggal_pickup' => 'required',
            'alamat_penjemputan' => 'required',
            'alamat_pengiriman' => 'required',
            'alamat_pengiriman' => 'required',
            'pembayaran' => 'required|in:LinkAja,OVO,Gopay,COD',
            'harga' => 'required',
            'catatan' => 'nullable'
        ]);

        Order::create($validatedData);
        return redirect('/OrderSaya')->with('success', 'Order Berhasil!');
    }

    public function orderSaya()
    {
        $user = Auth::user();
        $id = $user->id;
        $orders = DB::table('orders')->where('user_id', '=', $id)->orderBy('created_at', 'asc')->get();

        return view('pages.user.ordersaya', ['pages' => 'Order Saya'], compact('orders'));
    }
    public function invoice(Request $request)
    {
        $id = $request->get('id');
        $orders = Order::find($id);

        $product = $request->get('product');

        return view('pages.user.invoice', ['pages' => 'Invoice'], compact('orders'));
    }
}