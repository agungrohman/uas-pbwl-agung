
<?php $__env->startSection('content'); ?>
    <div class="container">
        <h3>EDIT DATA TRANSAKSI</h3>
        <form action="<?php echo e(url('/transaksi/' .$row->transaksi_id)); ?>" method="post">
            <?php echo method_field('PATCH'); ?>
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="">NAMA BARANG</label>
                <select name="transaksi_id_barang" id="" class="form-control">
                    <option value="">--Silahkan Pilih--</option>
                    <?php $__currentLoopData = $barang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($brg->barang_id); ?>"><?php echo e($brg->barang_nama); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>    
            </div>
            <div class="mb-3">
                <label for="">NAMA PEMBELI</label>
                <select name="transaksi_id_pembeli" id="" class="form-control">
                    <option value="">--Silahkan Pilih--</option>
                    <?php $__currentLoopData = $pembeli; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pbl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($pbl->pembeli_id); ?>"><?php echo e($pbl->pembeli_nama); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>    
            </div>
            <div class="mb-3">
                <label for="">TANGGAL</label>
                <input type="date" name="transaksi_tanggal" class="form-control" value="<?php echo e($row->transaksi_tanggal); ?>">
            </div>
            <div class="mb-3">
                <label for="">KETERANGAN</label>
                <input type="text" name="transaksi_keterangan" class="form-control" value="<?php echo e($row->transaksi_keterangan); ?>">
            </div>            <div class="mb-3">
                <input class="btn btn-primary" type="submit" name="" id="" value="UPDATE GESS">
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pbwl-uas-agung\resources\views/transaksi/edit.blade.php ENDPATH**/ ?>