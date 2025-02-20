@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h3>Detail produk</h3>
                </div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Nama Produk</th>
                            <td>{{$produk->nama_produk}}</td>
                        </tr>

                         <tr>
                            <th> Harga</th>
                            <td>{{$produk->harga}}</td>
                        </tr>

                         <tr>
                            <th> Stok</th>
                            <td>{{$produk->stok}}</td>
                        </tr>

                         <tr>
                            <th>ID kategori</th>
                            <td>{{$produk->kategori->nama}}</td>
                        </tr>
                       
                        
                    </table>
                    <a href="{{ route('produk.index') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection