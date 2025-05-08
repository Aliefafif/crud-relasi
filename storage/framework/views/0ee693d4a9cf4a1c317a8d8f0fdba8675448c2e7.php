

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                 <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Daftar Komik</span>
                    <a href="<?php echo e(route('komik.create')); ?>" class="btn btn-sm btn-primary">
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
                                <th scope="col">Nama Komik</th>
                                <th scope="col">Genre Komik</th>
                                <th scope="col">harga</th>
                                <th scope="col">stok</th>
                                <th scope="col">Penerbit</th>
                                <th scope="col">Tanggal terbit</th>
                                <th scope="col">foto</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php $__currentLoopData = $komik; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td scope="row"><?php echo e($no++); ?></td>
                                <td scope="row"><?php echo e($data->nama_komik); ?></td>
                                <td scope="row"><?php echo e($data->genre_komik); ?></td>
                                <td scope="row"><?php echo e($data->harga); ?></td>
                                <td scope="row"><?php echo e($data->stok); ?></td>
                                <td scope="row"><?php echo e($data->penerbit); ?></td>
                                <td scope="row"><?php echo e($data->tanggal_terbit); ?></td>
                                <td scope="row"><img src="<?php echo e(asset('storage/komik/' . $data->foto)); ?>" alt="" style="width:50px; height: 50px;"></td>
                                <td>
                                    <form action="<?php echo e(route('komik.destroy', $data->id)); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <a href="<?php echo e(route('komik.edit', $data->id)); ?>" class="btn btn-success">Edit</a>
                                        <a href="<?php echo e(route('komik.show', $data->id)); ?>" class="btn btn-warning">Show</a>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_alief\resources\views/komik/index.blade.php ENDPATH**/ ?>