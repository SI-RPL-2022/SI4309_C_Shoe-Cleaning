@extends('layouts.mainadmin')

@section('content')
<section>
    <div class="container pt-5 pb-5">
        <div class="row justify-content-center">
            <div class="col-9">
                <h4 id="invoice-title" class="pb-3">Order Detail</h4>
                <hr style="color: #504a4a; height: 2px;">
                <table>
                    <tbody>
                        <tr>
                            <td class="col-7 pt-2 pb-2" id="table-left">Nama Pembeli</td>
                            <td id="table-right">{{ $orders->nama_pemesan }}</td>
                        </tr>
                        <tr>
                            <td class="col-7 pt-2 pb-2" id="table-left">Nomor HP</td>
                            <td id="table-right">{{ $orders->no_hp }}</td>
                        </tr>
                        <tr>
                            <td id="table-left" class="col-7 pt-2 pb-2">Nama Produk</td>
                            <td id="table-right">{{ $orders->nama_produk }}</td>
                        </tr>
                        <tr>
                    </tbody>
                </table>
                <div class="pt-3"></div>
                <hr style="color: #504a4a; height: 2px;">
            </div>
        </div>

        <div class="row justify-content-end">
            <div class="col-1">
                <a href="/HomeAdmin" class="btn btn-warning">Back</a>
            </div>
            <div class="col-3">
                <button class="btn" id="update-button">Update</button>
                </form>
            </div>
        </div>
</section>
@endsection