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
        <th>No</th>
        <th>Kode Sepeda</th>
        <th>Jenis Sepeda</th>
        <th>Merek</th>
        <th width="280px">Action</th>
    </tr>

    <?php $__currentLoopData = $bikes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bike): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e(++$i); ?></td>
        <td><?php echo e($bike->kode_sepeda); ?></td>
        <td><?php echo e($bike->jenis_sepeda); ?></td>
        <td><?php echo e($bike->merek_sepeda); ?></td>
        
        <td>
            <a href="<?php echo e(route('bike.show',$bike->id)); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
            <a href="<?php echo e(route('bike.edit',$bike->id)); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
            <?php echo Form::open(['method' => 'DELETE','route' => ['bike.destroy', $bike->id],'style'=>'display:inline']); ?>

            <?php echo Form::submit('Delete', ['class' => 'btn btn-danger btn-xs', '<i class = glyphicon glyphicon-trash']); ?>

            <?php echo Form::close(); ?>

        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

<?php echo $bikes->links(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>