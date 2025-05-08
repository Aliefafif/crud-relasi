@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Edit Komik') }}</div>

                <div class="card-body">
                    <form action="{{route('Komik.update', $komik->id)}}" method="post" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="mb-3">
                            <label for="">Nama komik</label>
                            <input type="text" class="form-control @error('nama_komik') is-invalid @enderror"
                                   name="nama_komik" value="{{$komik->nama_komik}}">
                            @error('nama_komik')
                                <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="">Genre</label>
                            <input type="text" class="form-control @error('genre_komik') is-invalid @enderror" 
                                   name="genre_komik" value="{{$komik->genre_komik}}">
                            @error('genre_komik')
                                <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="">Stok</label>
                            <input type="text" class="form-control @error('stok') is-invalid @enderror" 
                                   name="stok" value="{{$komik->stok}}">
                            @error('stok')
                                <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="">Harga</label>
                            <input type="text" class="form-control @error('harga') is-invalid @enderror" 
                                   name="harga" value="{{$komik->harga}}">
                            @error('harga')
                                <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="">Penerbit</label>
                            <input type="text" class="form-control @error('penerbit') is-invalid @enderror" 
                                   name="penerbit" value="{{$komik->penerbit}}">
                            @error('penerbit')
                                <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="">Tanggal Produksi</label>
                            <input type="date" class="form-control @error('tanggal_terbit') is-invalid @enderror" 
                                   name="tanggal_terbit" value="{{$komik->tanggal_terbit}}">
                            @error('tanggal_terbit')
                                <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="">Foto</label>
                            @if ($komik->foto)
                                <div class="mb-2">
                                    <img src="{{ Storage::url('komik/' . $komik->foto) }}" alt="Foto komik" class="img-thumbnail" width="150">
                                </div>
                            @endif
                            <input type="file" class="form-control @error('foto') is-invalid @enderror" 
                                   name="foto" value="{{$komik->foto}}">
                            @error('foto')
                                <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
