<style>
#map {
    height: 80%;
}
</style>
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-10 col-md-offset-1">
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

<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">Lokasi Sepeda</div>

            <div class="panel-body">
                <table class="table">
                    <tr>
                        <th rowspan="2">Hotel</th>
                        <th colspan="2">Sepeda</th>
                    </tr>
                    <tr>
                        <th>Kode Sepeda</th>
                        <th>Merek Sepeda</th>
                        <th>Status</th>
                    </tr>
                    <?php $__currentLoopData = $hotels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hotel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php $__currentLoopData = $hotel->bikes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bike): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td>
                            <?php if($loop->iteration == 1): ?>
                            <b><?php echo e($hotel->nama); ?>: <?php echo e($hotel->bikes->count()); ?> Sepeda</b>
                            <?php endif; ?>
                        </td>
                        <td><?php echo e($bike->kode_sepeda); ?></td>
                        <td><?php echo e($bike->merek_sepeda); ?></td>
                        <td><?php echo e($bike->status); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <table class="table table-striped">
            <thead>
                <th>Hotel</th>
                <th>Kode Sepeda</th>
                <th>Status</th>
            </thead>
            <tbody>
                <?php $__currentLoopData = $status; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <td><?php echo e($stat->hotel->nama); ?></td>
                <td><?php echo e($stat->bike->kode_sepeda); ?></td>
                <td><?php echo e($stat->status); ?></td>
            </tbody>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>