@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h3>Detail Komik</h3>
                </div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Nama Produk</th>
                            <td>{{ $komik->nama_komik }}</td>
                        </tr>
                        <tr>
                            <th>Genre</th>
                            <td>{{ $komik->genre_komik }}</td>
                        </tr>
                        <tr>
                            <th>Stok</th>
                            <td>{{ $komik->stok }}</td>
                        </tr>
                        <tr>
                            <th>Harga</th>
                            <td>Rp {{ number_format($komik->harga, 0, ',', '.') }}</td>
                        </tr>
                        <tr>
                            <th>Penerbit</th>
                            <td>{{ date('d M Y', strtotime($komik->penerbit)) }}</td>
                        </tr>
                        <tr>
                            <th>Tanggal Terbit</th>
                            <td>{{ date('d M Y', strtotime($komik->tanggal_terbit)) }}</td>
                        </tr>
                        <tr>
                            <th>Foto</th>
                            <td>
                                @if ($komik->foto)
                                    <img src="{{ Storage::url('komik/' . $komik->foto) }}" alt="Foto Produk" 
                                         class="img-thumbnail" width="150">
                                @else
                                    <p>Tidak ada foto</p>
                                @endif
                            </td>
                        </tr>
                    </table>
                    <a href="{{ route('Komik.index') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection