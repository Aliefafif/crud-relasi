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
                                    

                                     <a href="{{ route('pendaftaran.create') }}" class="btn btn-sm btn-primary">Tambah</a>
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Lengkap</th>
                                                    <th>Jenis Kelamin</th>
                                                    <th>Tanggal Lahir</th>
                                                    <th>Agama</th>
                                                    <th>Asal sekolah</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            @php $no=1;@endphp
                                            @foreach ($pendaftaran as $data)
                                                <td>{{$no++}}</td>
                                                <td>{{$data->nama_lengkap}}</td>
                                                <td>{{$data->jenis_kelamin}}</td>
                                                <td>{{$data->tanggal_lahir}}</td>
                                                <td>{{$data->agama}}</td>
                                                <td>{{$data->asal_sekolah}}</td>
                                                <td>
                                                 <form action="{{ route('pendaftaran.destroy',$data->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="{{ route('pendaftaran.edit', $data->id) }}" class="btn btn-success">Edit</a>
                            <a href="{{ route('pendaftaran.show', $data->id) }}" class="btn btn-info btn-sm">Show</a>
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin?')">delete</button>
                            </td>
                            </form>
                            </td>                   
                            </tr>
                            </th>
                            </tr>
                             @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.panel-body -->
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
        <script src="{{ asset  ('admin/js/bootstrap.min.js') }}"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="{{ asset  ('admin/js/metisMenu.min.js') }}"></script>

        <!-- Morris Charts JavaScript -->
        <script src="{{ asset  ('admin/js/raphael.min.js') }}"></script>
        <script src="{{ asset  ('admin/js/morris.min.js') }}"></script>
        <script src="{{ asset  ('admin/js/morris-data.js') }}"></script>

        <!-- Custom Theme JavaScript -->
        <script src="{{ asset  ('admin/js/startmin.js') }}"></script>

    </body>

</html>

