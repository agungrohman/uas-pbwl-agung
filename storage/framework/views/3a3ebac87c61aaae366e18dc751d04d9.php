
<?php $__env->startSection('content'); ?>
    <div class="container">
        <h3>TAMBAH DATA PEMBELI</h3>
        <form action="<?php echo e(url('/pembeli')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="">NAMA</label>
                <input type="text" name="pembeli_nama" class="form-control" placeholder="Nama pembeli">
            </div>
            <div class="mb-3">
                <label for="">Alamat</label>
                <input type="text" name="pembeli_alamat" class="form-control" placeholder="Alamat pembeli">
            </div>
            <div class="mb-3">
                <label for="">Nomor Hp</label>
                <input type="text" name="pembeli_hp" class="form-control" placeholder="Nomor Hp pembeli">
            </div>
            <div class="mb-3">
                <input class="btn btn-secondary" type="submit" name="" id="" value="SIMPANN GESS">
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pbwl-uas-agung\resources\views/pembeli/create.blade.php ENDPATH**/ ?>