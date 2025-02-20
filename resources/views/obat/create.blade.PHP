@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Obat') }}</div>

                <div class="card-body">
                    <form action="{{ route('obat.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="nama_obat">Nama Obat</label>
                            <input type="text" class="form-control @error('nama_obat') is-invalid @enderror" name="nama_obat" required >
                            @error('nama_obat')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror

                         <div class="mb-3">
                            <label for="jenis_obat">jenis Obat</label>
                            <input type="text" class="form-control @error('jenis_obat') is-invalid @enderror" name="jenis_obat" required >
                            @error('jenis_obat')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror

                            <label for="tgl_kadaluarsa">Tanggal Kadaluarsa</label>
                            <input type="date" class="form-control @error('tgl_kadaluarsa') is-invalid @enderror" name="tgl_kadaluarsa" required >
                            @error('tgl_kadaluarsa')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror

                             <div class="mb-3">
                            <label for="harga">Harga</label>
                            <input type="number" class="form-control @error('harga') is-invalid @enderror" name="harga" required >
                            @error('harga')
                                <div class="invalid-feedback">{{ $message }}</div>
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
