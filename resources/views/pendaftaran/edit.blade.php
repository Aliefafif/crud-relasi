@extends('layouts.app')
@section('content')
<style>
        body {
            background: linear-gradient(to right, #22c1c3, #fdbb2d); 
        }
    </style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Tambah Pendaftaran</div>
                <div class="card-body">
                    <form action="{{ route('pendaftaran.update', $pendaftaran->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-2">
                            <label for="nik">NIK</label>
                            <input type="text" name="nik" class="form-control" value="{{ $pendaftaran->nik }}" required>
                        </div>
                        <div class="mb-2">
                            <label for="nama_lengkap">Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" class="form-control" value="{{ $pendaftaran->nama_lengkap }}" required>
                        </div>
                        <div class="mb-2">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" class="form-control" value="{{ $pendaftaran->tanggal_lahir }}" required>
                        </div>
                        <div class="mb-2">
                            <label for="agama">Agama</label>
                            <select name="agama" id="" class="form-control" required>
                                <option value="Islam" {{ $pendaftaran->agama == 'Islam' ? 'selected' : '' }}>Islam</option>
                                <option value="Budha" {{ $pendaftaran->agama == 'Budha' ? 'selected' : '' }}>Budha</option>
                                <option value="Kristen" {{ $pendaftaran->agama == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                            </select>
                        </div>
                        <div class="mb-2">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="" class="form-control" required>
                                <option value="Laki-laki" {{ $pendaftaran->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                <option value="Perempuan" {{ $pendaftaran->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-2">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat" class="form-control" required>{{ $pendaftaran->alamat }}</textarea>
                        </div>
                        <div class="mb-2">
                            <label for="asal_sekolah">Asal Sekolah</label>
                            <input type="text" name="asal_sekolah" class="form-control" value="{{ $pendaftaran->asal_sekolah }}" required>
                        </div>
                        <div class="mb-2">
                            <button class="btn btn-primary" type="submit">
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
