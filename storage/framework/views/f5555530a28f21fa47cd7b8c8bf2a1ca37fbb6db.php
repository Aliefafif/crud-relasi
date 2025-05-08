

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Registrasi</div>

                <div class="card-body">
                    <?php if(session('success')): ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?php echo e(session('success')); ?>

                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>

                    <a href="<?php echo e(route('Registrasi.create')); ?>" class="btn btn-primary">Tambah</a>

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
                            <?php $no = 1; ?>
                            <?php $__currentLoopData = $registrasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td scope="row"><?php echo e($no++); ?></td>
                                <td scope="row"><?php echo e($data->nama_lengkap); ?></td>
                                <td scope="row"><?php echo e($data->jenis_kelamin); ?></td>
                                <td scope="row"><?php echo e($data->tanggal_lahir); ?></td>
                                <td scope="row"><?php echo e($data->agama); ?></td>
                                <td scope="row"><?php echo e($data->asal_sekolah); ?></td>
                                <td>
                                    <form action="<?php echo e(route('Registrasi.destroy', $data->id)); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <a href="<?php echo e(route('Registrasi.edit', $data->id)); ?>" class="btn btn-success">Edit</a>
                                        <a href="<?php echo e(route('Registrasi.show', $data->id)); ?>" class="btn btn-warning">Show</a>
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_alief\resources\views/Registrasi/index.blade.php ENDPATH**/ ?>