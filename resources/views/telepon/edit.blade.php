@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __(' Edit Telepon') }}</div>

                <div class="card-body">
                    <form action="{{ route('telepon.update',$telepon->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="nama">Nomor</label>
                            <input type="text" class="form-control" name="nomor" value="{{$telepon->nomor}}">
                        </div>

                        <div class="form-group">
                        <label>id pengguna</label>
                        <select class= "form-control" name="id_pengguna">
                         @foreach ($pengguna as $data)
                         <option value="{{$data->id}}" {{$data->id == $telepon->id_pengguna ? 'selected' : ''}}>{{$data->nama}}</option>
    
                         @endforeach
                        </div>
                        </select>
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