

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><?php echo e(__('Tambah No Telepon')); ?></div>

                <div class="card-body">
                    <form action="<?php echo e(route('telepon.store')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="mb-3">
                            <label for="nama">Nomor</label>
                            <input type="text" class="form-control" name="nomor">
                        </div>
                        <div class="form-group">
                        <label>id pengguna</label>
                        <select class= "form-control" name="id_pengguna">
                         <?php $__currentLoopData = $pengguna; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <option value="<?php echo e($data->id); ?>"><?php echo e($data->nama); ?></option>
    
                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        </select>
                        <br>
                        <button type="submit" class="btn btn-primary">Save</button>
                        <div class="mb-3">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_alief\resources\views/telepon/create.blade.php ENDPATH**/ ?>