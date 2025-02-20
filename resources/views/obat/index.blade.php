@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-15">
            <div class="card">
                 <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Daftar Obat</span>
                    <a href="{{ route('obat.create') }}" class="btn btn-sm btn-primary">
                        Tambah
                    </a>
                </div>
                <div class="card-body">
                    @if (session('success'))
                      
                    @endif

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Obat</th>
                                <th scope="col">Jenis Obat </th>
                                <th scope="col">Tangggal Kadaluarsa</th>
                                <th scope="col">Harga </th>
                                <th scope="col">Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach ($obat as $data)
                            <tr>
                                <td scope="row">{{ $no++ }}</td>
                                <td scope="row">{{ $data->nama_obat}}</td>
                                <td scope="row">{{ $data->jenis_obat}}</td>
                                <td scope="row">{{ $data->tgl_kadaluarsa}}</td>
                                <td scope="row">{{ $data->harga}}</td>
                               
                                <td>
                                    <form action="{{ route('obat.destroy', $data->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('obat.edit', $data->id) }}" class="btn btn-success">Edit</a>|
                                        <a href="{{ route('obat.show', $data->id) }}" class="btn btn-warning">Show</a>|
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection