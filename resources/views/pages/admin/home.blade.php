@extends('layouts.mainadmin')

@section('content')
@if(session()->has('loginAdmin'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('loginAdmin') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<section>
    <div class="container pt-5 pb-5">
        <div class="row justify-content-center">
            <div class="col-4">
                <div class="text-center mb-3">
                    <h4 class="pb-3" id="welcome">Welcome, Admin</h4>
                    <p id="ordersaya-desc">Belum Ada Pesanan Masuk</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection