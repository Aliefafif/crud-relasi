@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h3>Detail pembeli</h3>
                </div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Nama pembeli</th>
                            <td>{{$pembeli->nama_pembeli}}</td>
                        </tr>

                         <tr>
                            <th>Jenis Kelamin</th>
                            <td>{{$pembeli->jenis_kelamin}}</td>
                        </tr>

                         <tr>
                            <th>Jenis Kelamin</th>
                            <td>{{$pembeli->telepon}}</td>
                        </tr>
                        
                    </table>
                    <a href="{{ route('pembeli.index') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection