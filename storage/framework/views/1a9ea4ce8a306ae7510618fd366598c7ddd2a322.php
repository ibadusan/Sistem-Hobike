<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Sistem Hobike | Penyewaan Sepeda di Kota Semarang</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="<?php echo e(route('hotel.create')); ?>"> Tambah Daftar Hotel</a>
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
            <th>Nama</th>
            <th>Alamat</th>
            <th>Kode Pos</th>
            <th width="280px">Action</th>
        </tr>

    <?php $__currentLoopData = $hotels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hotel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e(++$i); ?></td>
        <td><?php echo e($hotel->nama); ?></td>
        <td><?php echo e($hotel->alamat); ?></td>
        <td><?php echo e($hotel->kodepos); ?></td>
        <td>
            <a class="btn btn-info" href="<?php echo e(route('hotel.show',$hotel->id)); ?>">Show</a>
            <a class="btn btn-primary" href="<?php echo e(route('hotel.edit',$hotel->id)); ?>">Edit</a>
            <?php echo Form::open(['method' => 'DELETE','route' => ['hotel.destroy', $hotel->id],'style'=>'display:inline']); ?>

            <?php echo Form::submit('Delete', ['class' => 'btn btn-danger']); ?>

            <?php echo Form::close(); ?>

        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>

    <?php echo $hotels->links(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>