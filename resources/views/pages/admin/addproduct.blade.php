@extends('layouts.mainadmin')

@section('content')
<div class="container">
    <div class="row pt-5 pb-5">
        <div class="col">
            <h3 id="product-heading">Buat Produk</h3>
        </div>
    </div>

    <form action="" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label">Foto Produk</label>
            <input class="form-control" type="file">
        </div>

        <div class="mb-3">
            <label class="form-label">Nama Produk</label>
            <input type="text" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Harga Produk</label>
            <input type="text" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Example textarea</label>
            <textarea class="form-control" rows="3"></textarea>
        </div>
    </form>
</div>
@endsection