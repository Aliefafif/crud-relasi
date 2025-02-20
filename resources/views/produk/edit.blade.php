@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-center-content">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Edit Data Produk
                </div>
                <div class="card-body">
                    <form action="{{route('produk.update', $produk->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-2">
                            <label for="">Nama Produk</label>
                            <input type="text" name="nama_produk" class="form-control" value="{{$produk->nama}}" required>
                        </div>
                        <div class="mb-2">
                            <label for="">Harga</label>
                            <input type="number" name="harga" class="form-control" value="{{$produk->harga}}" required>
                        </div>
                        <div class="mb-2">
                            <label for="">Stok</label>
                            <input type="number" name="stok" class="form-control" value="{{$produk->stok}}" required>
                        </div>

                        <div>
                            <label for="">Id Kategori</label>
                            <select name="id_kategori" class="form-control">
                                @foreach($kategori as $data)
                                <option value="{{$data->id}}"{{$data->id == $produk->id_kategori ? 'selected':''}}>{{$data->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-2">
                            <button class="btn btn-primary" type="submit">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection