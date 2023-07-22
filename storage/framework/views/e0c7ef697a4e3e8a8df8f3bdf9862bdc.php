
<?php $__env->startSection('content'); ?>
    <div class="container">
        <h3>EDIT DATA PASIEN</h3>
        <form action="<?php echo e(url('/pasien/' .$row->pel_id)); ?>" method="post">
            <?php echo method_field('PATCH'); ?>
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="">KODE</label>
                <input type="text" name="pasien_no" class="form-control" value="<?php echo e($row->pasien_no); ?>">
            </div>
            <div class="mb-3">
                <label for="">NAMA</label>
                <input type="text" name="pasien_nama" class="form-control" value="<?php echo e($row->pasien_nama); ?>">
            </div>
            <div class="mb-3">
                <label for="">Alamat</label>
                <input type="text" name="pasien_alamat" class="form-control" value="<?php echo e($row->pasien_alamat); ?>">
            </div>
            <div class="mb-3">
                <label for="">Nomor Hp</label>
                <input type="text" name="pasien_hp" class="form-control" value="<?php echo e($row->pasien_hp); ?>">
            </div>
            <div class="mb-3">
                <input class="btn btn-secondary" type="submit" name="" id="" value="UPDATE">
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pbwl-laravel-quiz-juar\resources\views/pasien/edit.blade.php ENDPATH**/ ?>