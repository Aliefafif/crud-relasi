@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-center-content">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Edit Data Transaksi
                </div>
                <div class="card-body">
                    <form action="{{route('transaksi.update', $transaksi->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-2">
                            <label for="">Tanggal transaksi</label>
                            <input type="date" name="tanggal_transaksi" class="form-control" value="{{$transaksi->nama}}" required>
                        </div>
                        <div class="mb-2">
                            <label for="">Jumlah</label>
                            <input type="number" name="jumlah" class="form-control" value="{{$transaksi->jumlah}}" required>
                        </div>
                       
                        <div class="form-group">
                        <label>id Pembeli</label>
                        <select class= "form-control" name="id_pembeli">
                         @foreach ($pembeli as $data)
                         <option value="{{$data->id}}" {{$data->id == $transaksi->id_pembeli ? 'selected' : ''}}>{{$data->nama_pembeli}}</option>
    
                         @endforeach
                        </select>
                       </div>

                       <div class="form-group">
                        <label>id obat</label>
                        <select class= "form-control" name="id_obat">
                         @foreach ($obat as $data)
                         <option value="{{$data->id}}" {{$data->id == $transaksi->id_obat ? 'selected' : ''}}>{{$data->nama_obat}}</option>
    
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