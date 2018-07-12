<?php $__env->startSection('title', 'Sistem Hobike'); ?>

<?php $__env->startSection('content_header'); ?>
  Profil
  <small>Profil Saya</small>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  <div class="row">
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Profil</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered">
                        <tr>
                            <td class="text-muted">Name</td>
                            <td><?php echo e(auth()->user()->name); ?></td>
                        </tr>
                        <tr>
                            <td class="text-muted">Email</td>
                            <td><?php echo e(auth()->user()->email); ?></td>
                        </tr>
                        
                        <tr>
                            <td class="text-muted">Login Terakhir</td>
                            <td><?php echo e(auth()->user()->last_login); ?></td>
                        </tr>
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                  <a href="<?php echo e(url('admin/settings/profile/edit')); ?>" class="btn btn-info">Ubah</a>
                </div>
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>