

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Data Registrasi</div>

                <div class="card-body">
                    <form action="<?php echo e(route('Registrasi.update', $registrasi->id)); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>

                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama_lengkap" value="<?php echo e($registrasi->nama_lengkap); ?>" disabled>
                        </div>

                        <div class="form-group">
                            <label>Jenis Kelamin</label><br>
                            <input type="text" class="form-control" name="jenis_kelamin" value="<?php echo e($registrasi->jenis_kelamin); ?>" disabled>
                        </div>

                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tanggal_lahir" value="<?php echo e($registrasi->tanggal_lahir); ?>" disabled>
                        </div>

                        <div class="form-group">
                            <label>Agama</label>
                            <input type="text" class="form-control" name="agama" value="<?php echo e($registrasi->agama); ?>" disabled>
                        </div>

                        <div class="form-group">
                            <label>Asal Sekolah</label>
                            <input type="text" class="form-control" name="asal_sekolah" value="<?php echo e($registrasi->asal_sekolah); ?>" disabled>
                        </div>

                        <a href="<?php echo e(route('Registrasi.index')); ?>" class="btn btn-primary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_alief\resources\views/Registrasi/show.blade.php ENDPATH**/ ?>