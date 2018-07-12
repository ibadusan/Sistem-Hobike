<?php $__env->startSection('title', 'Sistem Hobike'); ?>

<?php $__env->startSection('content_header'); ?>



<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="container">
	<?php if(\Session::has('success')): ?>
	<div class="alert alert-success">
		<?php echo e(\Session::get('success')); ?>

	</div>
	<?php endif; ?>


	<div class="row">
		<div class="col-lg-12">
			<div class="box box-success">
				<div class="box-header ui-sortable-handle" class="center" style="cursor: move;">
					<center>
						<i class="fa fa-edit"></i>
						<h3 class="box-title">Rekapitulasi Data Hobike (Penyewaan Sepeda Di Kota Semarang)</h3>
					</center>
				</div>
			</div>
		</div>    
	</div>

	<div class="row">
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3><?php echo e($member->count()); ?></h3>

          <p>Data Penyewa</p>
        </div>
        <div class="icon">
          <i class="glyphicon glyphicon-user"></i>
        </div>
        <a href="<?php echo e(url('/admin/member')); ?>" class="small-box-footer">Details <i class="glyphicon glyphicon-circle-arrow-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3><?php echo e($hotel->count()); ?></h3>

          <p>Data Hotel</p>
        </div>
        <div class="icon">
          <i class="glyphicon glyphicon-home"></i>
        </div>
        <a href="<?php echo e(url('/admin/hotel')); ?>" class="small-box-footer">Details <i class="glyphicon glyphicon-circle-arrow-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-red">
        <div class="inner">
          <h3><?php echo e($bike->count()); ?></h3>

          <p>data Sepeda</p>
        </div>
        <div class="icon">
          <i class="glyphicon glyphicon-cycle"></i>
        </div>
        <a href="<?php echo e(url('/admin/bike')); ?>" class="small-box-footer">Details <i class="glyphicon glyphicon-circle-arrow-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
  </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>