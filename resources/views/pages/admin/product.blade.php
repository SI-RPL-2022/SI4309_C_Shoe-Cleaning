@extends('layouts.mainadmin')

@section('content')
<div>
    <div class="container">
        <div class="row justify-content-between pt-5 pb-5" id="product-bg">
            <div class="col-6">
                <h3 id="product-heading">Semua Produk Dari Shoe Cleaning</h3>
            </div>
            <div class="col-6">
                <div class="text-end">
                    <a class="btn btn-info text-white" href="/addProduct">Buat Produk Baru</a>
                </div>
            </div>
        </div>
        <div class=" text-center pt-5 pb-5">
            <p>Belum ada produk silahkan tambah produk!</p>
        </div>
    </div>
</div>
@endsection