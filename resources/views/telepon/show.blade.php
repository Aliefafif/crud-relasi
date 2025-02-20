@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h3>Detail Telepon</h3>
                </div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Nomor Telepon</th>
                            <td>{{$telepon->nomor}}</td>
                        </tr>
                         <tr>
                            <th>ID Pengguna</th>
                            <td>{{$telepon->pengguna->nama}}</td>
                        </tr>
                        
                    </table>
                    <a href="{{ route('telepon.index') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection