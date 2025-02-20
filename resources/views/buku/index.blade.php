@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                 <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Daftar Buku</span>
                    <a href="{{ route('Buku.create') }}" class="btn btn-sm btn-primary">
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
                                <th scope="col">Nama Buku</th>
                                <th scope="col">Genre Buku</th>
                                <th scope="col">harga</th>
                                <th scope="col">stok</th>
                                <th scope="col">Penerbit</th>
                                <th scope="col">Tanggal terbit</th>
                                <th scope="col">foto</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach ($buku as $data)
                            <tr>
                                <td scope="row">{{ $no++ }}</td>
                                <td scope="row">{{ $data->nama_buku }}</td>
                                <td scope="row">{{ $data->genre_buku }}</td>
                                <td scope="row">{{ $data->harga }}</td>
                                <td scope="row">{{ $data->stok }}</td>
                                <td scope="row">{{ $data->penerbit }}</td>
                                <td scope="row">{{ $data->tanggal_terbit }}</td>
                                <td scope="row"><img src="{{ asset('storage/buku/' . $data->foto)}}" alt="" style="width:50px; height: 50px;"></td>
                                <td>
                                    <form action="{{ route('Buku.destroy', $data->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('Buku.edit', $data->id) }}" class="btn btn-success">Edit</a>
                                        <a href="{{ route('Buku.show', $data->id) }}" class="btn btn-warning">Show</a>
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