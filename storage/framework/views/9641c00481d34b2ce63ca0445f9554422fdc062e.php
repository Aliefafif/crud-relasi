

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h3>Detail Buku</h3>
                </div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Nama Produk</th>
                            <td><?php echo e($buku->nama_buku); ?></td>
                        </tr>
                        <tr>
                            <th>Genre</th>
                            <td><?php echo e($buku->genre_buku); ?></td>
                        </tr>
                        <tr>
                            <th>Stok</th>
                            <td><?php echo e($buku->stok); ?></td>
                        </tr>
                        <tr>
                            <th>Harga</th>
                            <td>Rp <?php echo e(number_format($buku->harga, 0, ',', '.')); ?></td>
                        </tr>
                        <tr>
                            <th>Penerbit</th>
                            <td><?php echo e(date('d M Y', strtotime($buku->penerbit))); ?></td>
                        </tr>
                        <tr>
                            <th>Tanggal Terbit</th>
                            <td><?php echo e(date('d M Y', strtotime($buku->tanggal_terbit))); ?></td>
                        </tr>
                        <tr>
                            <th>Foto</th>
                            <td>
                                <?php if($buku->foto): ?>
                                    <img src="<?php echo e(Storage::url('buku/' . $buku->foto)); ?>" alt="Foto Produk" 
                                         class="img-thumbnail" width="150">
                                <?php else: ?>
                                    <p>Tidak ada foto</p>
                                <?php endif; ?>
                            </td>
                        </tr>
                    </table>
                    <a href="<?php echo e(route('Buku.index')); ?>" class="btn btn-secondary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_alief\resources\views/buku/show.blade.php ENDPATH**/ ?>