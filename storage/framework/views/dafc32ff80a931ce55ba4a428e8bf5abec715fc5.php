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
        <link href="<?php echo e(asset ('admin/css/bootstrap.min.css')); ?>" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="<?php echo e(asset ('admin/css/metisMenu.min.css')); ?>" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="<?php echo e(asset ('admin/css/timeline.css')); ?>" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="<?php echo e(asset ('admin/css/startmin.css')); ?>" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="<?php echo e(asset ('admin/css/morris.css')); ?>" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="<?php echo e(asset ('admin/css/font-awesome.min.css')); ?>" rel="stylesheet" type="text/css">

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
            
            <?php echo $__env->make('layouts.components.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            

            
             <?php echo $__env->make('layouts.components.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            
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
                                    NInggali
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <tbody>
                                    <form action="<?php echo e(route('pendaftaran.store')); ?>" method="post" enctype="multipart/form-data">
                                     <?php echo csrf_field(); ?>
                                     <?php echo method_field('PUT'); ?>
                                        
                    <table class="table table-bordered">
                        <tr>
                            <th>Nama Produk</th>
                            <td><?php echo e($buku->nama_buku); ?></td>
                        </tr>
                        <tr>
                            <th>Genre</th>
                            <td><?php echo e($buku->genre_buku); ?></td>
                        </tr>
                        <tr>
                            <th>Stok</th>
                            <td><?php echo e($buku->stok); ?></td>
                        </tr>
                        <tr>
                            <th>Harga</th>
                            <td>Rp <?php echo e(number_format($buku->harga, 0, ',', '.')); ?></td>
                        </tr>
                        <tr>
                            <th>Penerbit</th>
                            <td><?php echo e(date('d M Y', strtotime($buku->penerbit))); ?></td>
                        </tr>
                        <tr>
                            <th>Tanggal Terbit</th>
                            <td><?php echo e(date('d M Y', strtotime($buku->tanggal_terbit))); ?></td>
                        </tr>
                        <tr>
                            <th>Foto</th>
                            <td>
                                <?php if($buku->foto): ?>
                                    <img src="<?php echo e(Storage::url('buku/' . $buku->foto)); ?>" alt="Foto Produk" 
                                         class="img-thumbnail" width="150">
                                <?php else: ?>
                                    <p>Tidak ada foto</p>
                                <?php endif; ?>
                            </td>
                        </tr>
                    </table>
                    <a href="<?php echo e(route('Buku.index')); ?>" class="btn btn-primary">Kembali</a>
                                    </tbody>
                                    </form>
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
        <script src="<?php echo e(asset ('admin/js/jquery.min.js')); ?>"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo e(asset ('admin/js/bootstrap.min.js')); ?>"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="<?php echo e(asset ('admin/js/metisMenu.min.js')); ?>"></script>

        <!-- Morris Charts JavaScript -->
        <script src="<?php echo e(asset  ('admin/js/raphael.min.js')); ?>"></script>
        <script src="<?php echo e(asset  ('admin/js/morris.min.js')); ?>"></script>
        <script src="<?php echo e(asset  ('admin/js/morris-data.js')); ?>"></script>

        <!-- Custom Theme JavaScript -->
        <script src="<?php echo e(asset  ('admin/js/startmin.js')); ?>"></script>

    </body>

</html><?php /**PATH C:\xampp\htdocs\laravel_alief\resources\views/Buku/show.blade.php ENDPATH**/ ?>