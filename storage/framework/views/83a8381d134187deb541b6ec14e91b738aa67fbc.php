

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><?php echo e(__('Transaksi')); ?></div>

                <div class="card-body">
                    <form action="<?php echo e(route('transaksi.store')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="mb-3">
                            <label for="nama">Tanggal Transaksi</label>
                            <input type="date" class="form-control" name="tanggal_transaksi">
                        </div>

                         <div class="mb-3">
                            <label for="nama">jumlah</label>
                            <input type="number" class="form-control" name="jumlah">
                        </div>

                        <div class="form-group">
                        <label>id Pembeli</label>
                        <select class= "form-control" name="id_pembeli">
                         <?php $__currentLoopData = $pembeli; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <option value="<?php echo e($data->id); ?>"><?php echo e($data->nama_pembeli); ?></option>
    
                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                       </div>

                       <div class="form-group">
                        <label>id obat</label>
                        <select class= "form-control" name="id_obat">
                         <?php $__currentLoopData = $obat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <option value="<?php echo e($data->id); ?>"><?php echo e($data->nama_obat); ?></option>
    
                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                       </div>
                       
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


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_alief\resources\views/transaksi/create.blade.php ENDPATH**/ ?>