@extends('layouts.app')
@section('content')

<style>
        body {
            background: linear-gradient(to right, #22c1c3, #fdbb2d); 
        }
        .card-header {
            background-color:rgb(249, 174, 35);
            color: #fff;
        }
    </style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Daftar PPDB</span>
                    <a href="{{ route('pendaftaran.create') }}" class="btn btn-sm btn-primary">
                        Tambah
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIK</th>
                                    <th>Nama Lengkap</th>
                                    <th>Asal Sekolah</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Agama</th>
                                    <th>Alamat</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($pendaftaran as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->nik }}</td>
                                        <td>{{ $data->nama_lengkap }}</td>
                                        <td>{{ $data->asal_sekolah }}</td>
                                        <td>{{ $data->jenis_kelamin }}</td>
                                        <td>{{ $data->tanggal_lahir }}</td>
                                        <td>{{ $data->agama }}</td>
                                        <td>{{ $data->a }}</td>
                                        <td>
                                            <div class="d-flex justify-content-around">
                                                <a href="{{ route('pendaftaran.edit', $data->id) }}" class="btn btn-sm btn-success">
                                                    Edit
                                                </a>
                                                <form action="{{ route('pendaftaran.destroy', $data->id) }}" method="post" style="display:inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                     <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                           </form>
                 </div>
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
</div>

@endsection
