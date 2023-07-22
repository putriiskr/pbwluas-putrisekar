
<?php $__env->startSection('content'); ?>
    <div class="container">
        <h3>DATA PASIEN</h3>
        <?php if(session()->has('success')): ?>
        <div class="alert alert-success" role="alert">
            <?php echo e(session ('success')); ?>

        </div>
        <?php endif; ?>
        <a class="btn btn-secondary btn-sm float-end" href="<?php echo e(url('pasien/create')); ?>">Tambah Data</a>
        <table class="table table-striped">
            <tr>
                <td>NO</td>
                <td>KODE</td>
                <td>NAMA</td>
                <td>ALAMAT</td>
                <td>NOMOR HP</td>
                <td>EDIT</td>
                <td>HAPUS</td>
            </tr>
            <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($row->pasien_id); ?></td>
                <td><?php echo e($row->pasien_no); ?></td>
                <td><?php echo e($row->pasien_nama); ?></td>
                <td><?php echo e($row->pasien_alamat); ?></td>
                <td><?php echo e($row->pasien_hp); ?></td>
                <td><a class="btn btn-info btn-sm float" href="<?php echo e(url('pasien/' .$row->pas_id. '/edit')); ?>">Edit</a></td>
                <td>
                    <form action="<?php echo e(url('pasien/' .$row->pas_id)); ?>" method="post">
                        <?php echo method_field('DELETE'); ?>
                        <?php echo csrf_field(); ?>
                        <button class="btn btn-danger btn-sm float" onclick="return confirm('Apakah yakin ingin dihapus')">Hapus</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\quis\quis-pbwl-elsy\resources\views/pasien/index.blade.php ENDPATH**/ ?>