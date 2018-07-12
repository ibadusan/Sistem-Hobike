<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Show Data Hotel</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="<?php echo e(route('bike.index')); ?>"> Back</a>
        </div>
    </div>
</div>


<div class="row">
    <!-- Id Field -->
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
           <strong>Jenis Sepeda:</strong>

            <?php echo e($bike->id); ?>

        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Jenis Sepeda:</strong>

            <?php echo e($bike->jenis_sepeda); ?>

        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Merek Sepeda:</strong>
            <?php echo e($bike->merek_sepeda); ?>

        </div>
    </div>



    <!-- Created At Field -->
    <div class="col-xs-12 col-sm-12 col-md-12">
        <?php echo Form::label('created_at', 'Created At:'); ?>

        <p><?php echo $bike->created_at; ?></p>
    </div>

    <!-- Updated At Field -->
    <div class="col-xs-12 col-sm-12 col-md-12">
        <?php echo Form::label('updated_at', 'Updated At:'); ?>

        <p><?php echo $bike->updated_at; ?></p>
    </div>
</div>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>