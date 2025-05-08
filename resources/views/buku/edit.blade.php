<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Startmin - Bootstrap Admin Theme</title>

        <!-- Bootstrap Core CSS -->
        <link href="{{ asset ('admin/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="{{ asset ('admin/css/metisMenu.min.css') }}" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="{{ asset ('admin/css/timeline.css') }}" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="{{ asset ('admin/css/startmin.css') }}" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="{{ asset ('admin/css/morris.css') }}" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="{{ asset ('admin/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            {{-- NAVBAR --}}
            @include('layouts.components.header')
            {{-- /NAVBAR --}}

            {{-- SIDEBAR --}}
             @include('layouts.components.sidebar')
            {{-- /SIDEBAR --}}
            </nav> 
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">PENDAFTARAN</h1>
                            
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                    </div>
                    <!-- /.row -->
                    <div class="col-lg-10">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    EDIT 
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <tbody>
                            
   <form action="{{route('Buku.update', $buku->id)}}" method="post" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="mb-3">
                            <label for="">Nama Buku</label>
                            <input type="text" class="form-control @error('nama_buku') is-invalid @enderror"
                                   name="nama_buku" value="{{$buku->nama_buku}}">
                            @error('nama_buku')
                                <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="">Genre</label>
                            <input type="text" class="form-control @error('genre_buku') is-invalid @enderror" 
                                   name="genre_buku" value="{{$buku->genre_buku}}">
                            @error('genre_buku')
                                <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="">Stok</label>
                            <input type="text" class="form-control @error('stok') is-invalid @enderror" 
                                   name="stok" value="{{$buku->stok}}">
                            @error('stok')
                                <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="">Harga</label>
                            <input type="text" class="form-control @error('harga') is-invalid @enderror" 
                                   name="harga" value="{{$buku->harga}}">
                            @error('harga')
                                <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="">Penerbit</label>
                            <input type="text" class="form-control @error('penerbit') is-invalid @enderror" 
                                   name="penerbit" value="{{$buku->penerbit}}">
                            @error('penerbit')
                                <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="">Tanggal Terbit</label>
                            <input type="date" class="form-control @error('tanggal_terbit') is-invalid @enderror" 
                                   name="tanggal_terbit" value="{{$buku->tanggal_terbit}}">
                            @error('tanggal_terbit')
                                <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>

                         <div class="form-group">
                            <label>Ganti Foto</label><br>
                            <img src="{{asset('storage/buku/'.$buku->foto)}}" alt="" style="width: 100px; height: 100px;">

                            <input type="file" class="form-control" name="foto" value="{{$buku->foto}}" required>

                            @error('foto')
                                <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <button class="btn btn-primary" type="submit">
                                Simpan
                            </button>
                        </div>
                    </form>
                                    <!-- /.table-responsive -->
                                </div>
                                <!--    /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="{{ asset ('admin/js/jquery.min.js') }}"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="{{ asset ('admin/js/bootstrap.min.js') }}"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="{{ asset ('admin/js/metisMenu.min.js') }}"></script>

        <!-- Morris Charts JavaScript -->
        <script src="{{ asset  ('admin/js/raphael.min.js') }}"></script>
        <script src="{{ asset  ('admin/js/morris.min.js') }}"></script>
        <script src="{{ asset  ('admin/js/morris-data.js') }}"></script>

        <!-- Custom Theme JavaScript -->
        <script src="{{ asset  ('admin/js/startmin.js') }}"></script>

    </body>

</html>