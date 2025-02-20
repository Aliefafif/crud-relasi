@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Tambah  produk') }}</div>

                <div class="card-body">
                    <form action="{{ route('produk.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="nama">Nama Produk</label>
                            <input type="text" class="form-control" name="nama_produk">
                        </div>

                         <div class="mb-3">
                            <label for="nama">Harga</label>
                            <input type="text" class="form-control" name="harga">
                        </div>

                         <div class="mb-3">
                            <label for="nama">Stok</label>
                            <input type="text" class="form-control" name="stok">
                        </div>

                        <div class="form-group">
                        <label>id Kategori</label>
                        <select class= "form-control" name="id_kategori">
                         @foreach ($kategori as $data)
                         <option value="{{$data->id}}">{{$data->nama}}</option>
    
                         @endforeach
                        </div>
                        </select>
                        <br>
                        <button type="submit" class="btn btn-primary">Save</button>
                        <div class="mb-3">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection