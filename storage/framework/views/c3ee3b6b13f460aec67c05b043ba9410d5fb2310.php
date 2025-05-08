
<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Registrasi</div>
                <div class="card-body">
                    <form action="<?php echo e(route('Registrasi.store')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="nama_lengkap">Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" class="form-control" required>
                        </div>

                       <div class="form-group">
                            <label>Jenis Kelamin</label><br>
                            <input type="radio" class="form-check-input" name="jenis_kelamin" value="Laki-laki">Laki-laki
                            <input type="radio" class="form-check-input" name="jenis_kelamin" value="Perempuan">Perempuan
                        </div>

                        <div class="form-group">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="agama">Agama</label>
                            <select name="agama" id="" class="form-control" required>
                                <option value="">>--- Pilih Agama ---<</option>
                                <option value="Islam">Islam</option>
                                <option value="Budha">Budha</option>
                                <option value="Kristen">Kristen</option>
                                <option value="hindu">Hindu</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="asal_sekolah">Asal Sekolah</label>
                            <input type="text" name="asal_sekolah" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_alief\resources\views/Registrasi/create.blade.php ENDPATH**/ ?>