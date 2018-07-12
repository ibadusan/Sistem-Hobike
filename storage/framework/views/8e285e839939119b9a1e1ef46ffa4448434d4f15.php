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
                    <h3 class="box-title">Edit Profil</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <?php echo Form::model(auth()->user(), ['url' => url('admin/settings/profile'), 'method' => 'post', 'files' => 'true']); ?>

                <div class="box-body">
                    <div class="form-group has-feedback<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                        <?php echo Form::label('name', 'Nama'); ?>


                        <?php echo Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nama']); ?>

                        <?php echo $errors->first('name', '<p class="help-block">:message</p>'); ?>

                    </div>

                    <div class="form-group has-feedback<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                        <?php echo Form::label('email', 'Email'); ?>


                        <?php echo Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email']); ?>

                        <?php echo $errors->first('email', '<p class="help-block">:message</p>'); ?>

                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <?php echo Form::submit('Simpan', ['class' => 'btn btn-primary']); ?>

                </div>
                <!-- /.box-footer -->
                <?php echo Form::close(); ?>

            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>