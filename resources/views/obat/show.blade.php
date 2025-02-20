@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h3>Detail Obat</h3>
                </div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Nama Obat</th>
                            <td>{{$obat->nama_obat}}</td>
                        </tr>

                         <tr>
                            <th>Jenis Obat</th>
                            <td>{{$obat->jenis_obat}}</td>
                        </tr>

                         <tr>
                            <th>Tanggal Kadaluarsa</th>
                            <td>{{$obat->tgl_kadaluarsa}}</td>
                        </tr>

                          <tr>
                            <th>Harga</th>
                            <td>Rp {{ number_format($obat->harga, 0, ',', '.') }}</td>
                        </tr>
                        
                    </table>
                    <a href="{{ route('obat.index') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection