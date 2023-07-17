
<?php $__env->startSection('content'); ?>
    <div class="container">
        <h3>DATA PEMBAYARAN</h3>
        <?php if(session()->has('success')): ?>
        <div class="alert alert-success" role="alert">
            <?php echo e(session ('success')); ?>

        </div>
        <?php endif; ?>
        <a class="btn btn-info btn-sm float-end" href="<?php echo e(url('pembayaran/create')); ?>">Tambah Data</a>
        <table class="table table-bordered">
            <tr>
                <td>NO</td>
                <td>TANGGAL TRANSAKSI</td>
                <td>TANGGAL PEMBAYARAN</td>
                <td>TOTAL</td>
                <td>EDIT DATA</td>
                <td>HAPUS DATA</td>
            </tr>
            <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($row->pembayaran_id); ?></td>
                <td><?php echo e($row->transaksi->transaksi_tanggal); ?></td>
                <td><?php echo e($row->pembayaran_tanggal); ?></td>
                <td><?php echo e($row->pembayaran_total); ?></td>
                <td><a class="btn btn-dark btn-sm float" href="<?php echo e(url('pembayaran/' .$row->pembayaran_id. '/edit')); ?>">Edit</a></td>
                <td>
                    <form action="<?php echo e(url('pembayaran/' .$row->pembayaran_id)); ?>" method="post">
                        <?php echo method_field('DELETE'); ?>
                        <?php echo csrf_field(); ?>
                        <button class="btn btn-danger btn-sm float" onclick="return confirm('SERIUSS MAUU KELUARR DEKK')">Hapus</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pbwl-uas-agung\resources\views/pembayaran/index.blade.php ENDPATH**/ ?>