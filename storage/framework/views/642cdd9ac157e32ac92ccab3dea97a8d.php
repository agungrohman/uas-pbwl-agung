
<?php $__env->startSection('content'); ?>
    <div class="container">
        <h3>EDIT DATA PEMBAYARAN</h3>
        <form action="<?php echo e(url('/pembayaran/' .$row->pembayaran_id)); ?>" method="post">
            <?php echo method_field('PATCH'); ?>
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="">TANGGAL TRANSAKSI</label>
                <select name="pembayaran_id_transaksi" id="" class="form-control">
                    <option value="">--Silahkan Pilih--</option>
                    <?php $__currentLoopData = $transaksi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tran): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($tran->transaksi_id); ?>"><?php echo e($tran->transaksi_tanggal); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>    
            </div>
            <div class="mb-3">
                <label for="">TANGGAL BAYAR</label>
                <input type="date" name="pembayaran_tanggal" class="form-control" value="<?php echo e($row->pembayaran_tanggal); ?>">
            </div>
            <div class="mb-3">
                <label for="">TOTAL</label>
                <input type="text" name="pembayaran_total" class="form-control" value="<?php echo e($row->pembayaran_total); ?>">
            </div>
            <div class="mb-3">
                <input class="btn btn-primary" type="submit" name="" id="" value="UPDATE GESS">
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pbwl-uas-agung\resources\views/pembayaran/edit.blade.php ENDPATH**/ ?>