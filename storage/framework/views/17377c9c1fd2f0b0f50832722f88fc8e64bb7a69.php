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
                                    EDIT 
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <tbody>
                                   <form action="<?php echo e(route('pendaftaran.update', $pendaftaran->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <div class="mb-2">
                            <label for="nama_lengkap">Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" class="form-control" value="<?php echo e($pendaftaran->nama_lengkap); ?>" required>
                        </div>
                        <div class="mb-2">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" class="form-control" value="<?php echo e($pendaftaran->tanggal_lahir); ?>" required>
                        </div>
                        <div class="mb-2">
                            <label for="agama">Agama</label>
                            <select name="agama" id="" class="form-control" required>
                                <option value="Islam" <?php echo e($pendaftaran->agama == 'Islam' ? 'selected' : ''); ?>>Islam</option>
                                <option value="Budha" <?php echo e($pendaftaran->agama == 'Budha' ? 'selected' : ''); ?>>Budha</option>
                                <option value="Kristen" <?php echo e($pendaftaran->agama == 'Kristen' ? 'selected' : ''); ?>>Kristen</option>
                            </select>
                        </div>
                        <div class="mb-2">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="" class="form-control" required>
                                <option value="Laki-laki" <?php echo e($pendaftaran->jenis_kelamin == 'Laki-laki' ? 'selected' : ''); ?>>Laki-laki</option>
                                <option value="Perempuan" <?php echo e($pendaftaran->jenis_kelamin == 'Perempuan' ? 'selected' : ''); ?>>Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-2">
                            <label for="asal_sekolah">Asal Sekolah</label>
                            <input type="text" name="asal_sekolah" class="form-control" value="<?php echo e($pendaftaran->asal_sekolah); ?>" required>
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

</html><?php /**PATH C:\xampp\htdocs\laravel_alief\resources\views/pendaftaran/edit.blade.php ENDPATH**/ ?>