
<?php $__env->startSection('content'); ?>
    <div class="container">
        <h3>EDIT DATA PEMBELI</h3>
        <form action="<?php echo e(url('/pembeli/' .$row->pembeli_id)); ?>" method="post">
            <?php echo method_field('PATCH'); ?>
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="">NAMA</label>
                <input type="text" name="pembeli_nama" class="form-control" value="<?php echo e($row->pembeli_nama); ?>">
            </div>
            <div class="mb-3">
                <label for="">Alamat</label>
                <input type="text" name="pembeli_alamat" class="form-control" value="<?php echo e($row->pembeli_alamat); ?>">
            </div>
            <div class="mb-3">
                <label for="">Nomor Hp</label>
                <input type="text" name="pembeli_hp" class="form-control" value="<?php echo e($row->pembeli_hp); ?>">
            </div>
            <div class="mb-3">
                <input class="btn btn-info" type="submit" name="" id="" value="UPDATE">
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pbwl-uas-agung\resources\views/pembeli/edit.blade.php ENDPATH**/ ?>