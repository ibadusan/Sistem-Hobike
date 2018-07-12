<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Sistem Hobike | Penyewaan Sepeda di Kota Semarang</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="<?php echo e(route('bike.create')); ?>"> Tambah Daftar Sepeda</a>
            <a class="btn btn-danger" href="<?php echo e(route('home')); ?>"> Kembali</a>
        </div>
    </div>
</div>


<?php if($message = Session::get('success')): ?>
<div class="alert alert-success">
    <p><?php echo e($message); ?></p>
</div>
<?php endif; ?>

<table class="table table-bordered">
    <tr>
        <th>Id Sepeda</th>
        <th>Jenis Sepeda</th>
        <th>Merek</th>
        <th>Lokasi</th>
        <th>Status</th>
    </tr>

    <?php $__currentLoopData = $bikes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bike): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($bike->bikeid); ?></td>
        <td><?php echo e($bike->jenis); ?></td>
        <td><?php echo e($bike->mereks); ?></td>
        <td><?php echo e($bike->nama); ?></td>
        <td><?php echo e($bike->status); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>