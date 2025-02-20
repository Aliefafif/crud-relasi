@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Transaksi') }}</div>

                <div class="card-body">
                    <form action="{{ route('transaksi.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="nama">Tanggal Transaksi</label>
                            <input type="date" class="form-control" name="tanggal_transaksi">
                        </div>

                         <div class="mb-3">
                            <label for="nama">jumlah</label>
                            <input type="number" class="form-control" name="jumlah">
                        </div>

                        <div class="form-group">
                        <label>id Pembeli</label>
                        <select class= "form-control" name="id_pembeli">
                         @foreach ($pembeli as $data)
                         <option value="{{$data->id}}">{{$data->nama_pembeli}}</option>
    
                         @endforeach
                        </select>
                       </div>

                       <div class="form-group">
                        <label>id obat</label>
                        <select class= "form-control" name="id_obat">
                         @foreach ($obat as $data)
                         <option value="{{$data->id}}">{{$data->nama_obat}}</option>
    
                         @endforeach
                        </select>
                       </div>
                       
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

