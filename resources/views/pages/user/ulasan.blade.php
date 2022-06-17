@extends('layouts.main')

@section('content')
<section>
    <div class="container pb-4">
        <h3 class="fw-bold pb-3">Ulasan Produk</h3>
        <p>Berikan ulasan untuk produk yang sudah anda pesan</p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-3">
                <h3>{{ $data->nama_produk }}</h3>
                <p>{{ $desc }}</p>
            </div>
            <div class="col-9"></div>
        </div>
    </div>
</section>
@endsection