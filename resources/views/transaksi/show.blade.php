@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h3>Detail Transaksi</h3>
                </div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Tanggal Transaksi</th>
                            <td>{{$transaksi->tanggal_transaksi}}</td>
                        </tr>

                         <tr>
                            <th> jumlah</th>
                            <td>{{$transaksi->jumlah}}</td>
                        </tr>

                        <tr>
                            <th>ID Pembeli</th>
                            <td>{{$transaksi->pembeli->nama_pembeli}}</td>
                        </tr>

                                                <tr>
                            <th>ID Obat</th>
                            <td>{{$transaksi->obat->nama_obat}}</td>
                        </tr>
                       
                        
                    </table>
                    <a href="{{ route('transaksi.index') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection