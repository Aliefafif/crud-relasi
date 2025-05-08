

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                 <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Daftar pembeli</span>
                    <a href="<?php echo e(route('pembeli.create')); ?>" class="btn btn-sm btn-primary">
                        Tambah
                    </a>
                </div>
                <div class="card-body">
                    <?php if(session('success')): ?>
                      
                    <?php endif; ?>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Pembeli</th>
                                <th scope="col">Jenis Kelamin </th>
                                <th scope="col">Telepon</th>
                                <th scope="col">Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php $__currentLoopData = $pembeli; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td scope="row"><?php echo e($no++); ?></td>
                                <td scope="row"><?php echo e($data->nama_pembeli); ?></td>
                                <td scope="row"><?php echo e($data->jenis_kelamin); ?></td>
                                <td scope="row"><?php echo e($data->telepon); ?></td>
                               
                                <td>
                                    <form action="<?php echo e(route('pembeli.destroy', $data->id)); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <a href="<?php echo e(route('pembeli.edit', $data->id)); ?>" class="btn btn-success">Edit</a>|
                                        <a href="<?php echo e(route('pembeli.show', $data->id)); ?>" class="btn btn-warning">Show</a>|
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_alief\resources\views/pembeli/index.blade.php ENDPATH**/ ?>