

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                 <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Daftar telepon</span>
                    <a href="<?php echo e(route('telepon.create')); ?>" class="btn btn-sm btn-primary">
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
                                <th scope="col">Nomor</th>
                                <th scope="col">Id Pengguna</th>
                                <th scope="col">Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php $__currentLoopData = $telepon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td scope="row"><?php echo e($no++); ?></td>
                                <td scope="row"><?php echo e($data->nomor); ?></td>
                                <td scope="row"><?php echo e($data->pengguna->nama); ?></td>
                               
                                <td>
                                    <form action="<?php echo e(route('telepon.destroy', $data->id)); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <a href="<?php echo e(route('telepon.edit', $data->id)); ?>" class="btn btn-success">Edit</a>|
                                        <a href="<?php echo e(route('telepon.show', $data->id)); ?>" class="btn btn-warning">Show</a>|
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_alief\resources\views/telepon/index.blade.php ENDPATH**/ ?>