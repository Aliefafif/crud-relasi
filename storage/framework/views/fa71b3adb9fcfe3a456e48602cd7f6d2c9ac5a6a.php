

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                 <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Daftar Transaksi</span>
                    <a href="<?php echo e(route('transaksi.create')); ?>" class="btn btn-sm btn-primary">
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
                                <th scope="col">Tanggal Transaksi </th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Id Pembeli</th>
                                <th scope="col">Id Obat</th>
                                <th scope="col">Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php $__currentLoopData = $transaksi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td scope="row"><?php echo e($no++); ?></td>
                                <td scope="row"><?php echo e($data->tanggal_transaksi); ?></td>
                                <td scope="row"><?php echo e($data->jumlah); ?></td>
                                <td scope="row"><?php echo e($data->pembeli->nama_pembeli); ?></td>
                                <td scope="row"><?php echo e($data->obat->nama_obat); ?></td>
                               
                                <td>
                                    <form action="<?php echo e(route('transaksi.destroy', $data->id)); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <a href="<?php echo e(route('transaksi.edit', $data->id)); ?>" class="btn btn-success">Edit</a>|
                                        <a href="<?php echo e(route('transaksi.show', $data->id)); ?>" class="btn btn-warning">Show</a>|
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_alief\resources\views/transaksi/index.blade.php ENDPATH**/ ?>