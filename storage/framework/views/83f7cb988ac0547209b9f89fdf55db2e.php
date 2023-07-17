
<?php $__env->startSection('content'); ?>
    <div class="container">
        <h3>EDIT DATA BARANG</h3>
        <form action="<?php echo e(url('/barang/' .$row->barang_id)); ?>" method="post">
            <?php echo method_field('PATCH'); ?>
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="">NAMA BARANG</label>
                <input type="text" name="barang_nama" class="form-control" value="<?php echo e($row->barang_nama); ?>">
            </div>
            <div class="mb-3">
                <label for="">NAMA SUPPLIER</label>
                <select name="barang_id_supplier" id="" class="form-control">
                    <?php $__currentLoopData = $supplier; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $supp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($supp->supplier_id); ?>"><?php echo e($supp->supplier_nama); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>    
            </div>
            
            <div class="mb-3">
                <label for="">HARGA BARANG</label>
                <input type="text" name="barang_harga" class="form-control" value="<?php echo e($row->barang_harga); ?>">
            </div>
            <div class="mb-3">
                <label for="">STOK BARANG</label>
                <input type="text" name="barang_stok" class="form-control" value="<?php echo e($row->barang_stok); ?>">
            </div>
            <div class="mb-3">
                <input class="btn btn-primary" type="submit" name="" id="" value="UPDATE GESS">
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pbwl-uas-agung\resources\views/barang/edit.blade.php ENDPATH**/ ?>