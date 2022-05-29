@extends('layouts.main')

@section('content')
@if (count($orders) === 0)
<section>
    <div class="container pt-5 pb-5">
        <div class="row justify-content-center">
            <div class="col-4">
                <div class="text-center mb-3">
                    <p id="ordersaya-desc">Anda Belum Melakukan Pemesanan</p>
                    <a class="btn" href="/Service" id="cuci-button">Cuci Sepatu</a>
                </div>
            </div>
        </div>
    </div>
</section>
@else
@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
