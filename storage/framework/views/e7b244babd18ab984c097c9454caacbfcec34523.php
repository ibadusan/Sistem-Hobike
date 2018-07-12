<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Sistem Hobike | Penyewaan Sepeda di Kota Semarang</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="<?php echo e(route('sewa.create')); ?>"> Sewa</a>
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
        <th>No</th>
        <th>Nama Member</th>
        <th>Hotel Tempat Sewa</th>
        <th>Id Sepeda</th>
        <th>Hotel Tempat Kembali</th>
        <th>Jam Pinjam</th>
        <th>Jam Kembali</th>
        <th>Tanggal</th>
        <th>Details</th>
    </tr>
    <?php $__currentLoopData = $sewas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sewa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($sewa->id_sewa); ?></td>
        <td><?php echo e($sewa->memberid); ?></td>
        <td><?php echo e($sewa->hotel_sewa); ?></td>
        <td><?php echo e($sewa->bikeid); ?></td>
        <td><?php echo e($sewa->hotel_kembali); ?></td>
        <td><?php echo e(Carbon\Carbon::parse($sewa->created_at)->format("H:i:s")); ?></td>
        <td><?php echo e(Carbon\Carbon::parse($sewa->updated_at)->format("H:i:s")); ?></td>
        <td><?php echo e(Carbon\Carbon::parse($sewa->created_at)->format("Y:m:d")); ?></td>
        <td>
            <a class="btn btn-info" href="<?php echo e(route('sewa.edit',$sewa->id)); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-share-alt"></i></a>
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>