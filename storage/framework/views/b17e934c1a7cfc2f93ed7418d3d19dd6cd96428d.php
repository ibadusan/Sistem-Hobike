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

<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Member</th>
                <th>Hotel Tempat Sewa</th>
                <th>Kode Sepeda</th>
                <th>Jam Pinjam</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody class="table-striped">
            <?php (
                $no = 1
            ); ?>
            <?php $__currentLoopData = $sewas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sewa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($no++); ?></td>
                <td><?php echo e($sewa->member->nama); ?></td>
                <td><?php echo e($sewa->hotelAwal->nama); ?></td>
                <td><?php echo e($sewa->bike->kode_sepeda); ?></td>
                <td><?php echo e(Carbon\Carbon::parse($sewa->created_at)->format("H:i:s")); ?></td>
                <td>
                    <a class="btn btn-info" href="<?php echo e(route('sewa.edit',$sewa->id)); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-share-alt"></i></a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
        </tbody>
        
    </table>
    
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>