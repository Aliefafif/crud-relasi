@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h3>Detail Buku</h3>
                </div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Nama Produk</th>
                            <td>{{ $buku->nama_buku }}</td>
                        </tr>
                        <tr>
                            <th>Genre</th>
                            <td>{{ $buku->genre_buku }}</td>
                        </tr>
                        <tr>
                            <th>Stok</th>
                            <td>{{ $buku->stok }}</td>
                        </tr>
                        <tr>
                            <th>Harga</th>
                            <td>Rp {{ number_format($buku->harga, 0, ',', '.') }}</td>
                        </tr>
                        <tr>
                            <th>Penerbit</th>
                            <td>{{ date('d M Y', strtotime($buku->penerbit)) }}</td>
                        </tr>
                        <tr>
                            <th>Tanggal Terbit</th>
                            <td>{{ date('d M Y', strtotime($buku->tanggal_terbit)) }}</td>
                        </tr>
                        <tr>
                            <th>Foto</th>
                            <td>
                                @if ($buku->foto)
                                    <img src="{{ Storage::url('buku/' . $buku->foto) }}" alt="Foto Produk" 
                                         class="img-thumbnail" width="150">
                                @else
                                    <p>Tidak ada foto</p>
                                @endif
                            </td>
                        </tr>
                    </table>
                    <a href="{{ route('Buku.index') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection