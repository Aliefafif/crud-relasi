@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Registrasi</div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <a href="{{ route('Registrasi.create') }}" class="btn btn-primary">Tambah</a>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Lengkap</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Tanggal Lahir</th>
                                <th scope="col">Agama</th>
                                <th scope="col">Asal Sekolah</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach ($registrasi as $data)
                            <tr>
                                <td scope="row">{{ $no++ }}</td>
                                <td scope="row">{{ $data->nama_lengkap }}</td>
                                <td scope="row">{{ $data->jenis_kelamin }}</td>
                                <td scope="row">{{ $data->tanggal_lahir }}</td>
                                <td scope="row">{{ $data->agama }}</td>
                                <td scope="row">{{ $data->asal_sekolah }}</td>
                                <td>
                                    <form action="{{ route('Registrasi.destroy', $data->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('Registrasi.edit', $data->id) }}" class="btn btn-success">Edit</a>
                                        <a href="{{ route('Registrasi.show', $data->id) }}" class="btn btn-warning">Show</a>
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
