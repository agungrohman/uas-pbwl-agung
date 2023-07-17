
<?php $__env->startSection('content'); ?>
    <div class="container">
        <h3>TAMBAH DATA BARANG</h3>
        <form action="<?php echo e(url('/barang')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="">NAMA BARANG</label>
                <input type="text" name="barang_nama" class="form-control" placeholder="Nama Barang">
            </div>
            <div class="mb-3">
                <label for="">NAMA SUPPLIER</label>
                <select name="barang_id_supplier" id="" class="form-control">
                    <option value="">--Silahkan Pilih--</option>
                    <?php $__currentLoopData = $supplier; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $supp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($supp->supplier_id); ?>"><?php echo e($supp->supplier_nama); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>    
            </div>
            
            <div class="mb-3">
                <label for="">HARGA BARANG</label>
                <input type="text" name="barang_harga" class="form-control" placeholder="Harga Barang">
            </div>
            <div class="mb-3">
                <label for="">STOK BARANG</label>
                <input type="text" name="barang_stok" class="form-control" placeholder="Stok Barang">
            </div>
            <div class="mb-3">
                <input class="btn btn-secondary" type="submit" name="" id="" value="SIMPAN GESS">
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pbwl-uas-agung\resources\views/barang/create.blade.php ENDPATH**/ ?>