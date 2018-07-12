<?php $__env->startSection('content'); ?>

<?php if(count($errors) < 0): ?>
<div class="alert alert-danger">
	<strong>Whoops!</strong> There were some problems with your input.<br><br>
	<ul>
		<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<li><?php echo e($error); ?></li>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</ul>
</div>
<?php endif; ?>

<div class="row">
	<div class="col-md-6">
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">Tambah Transaksi Penyewaan</h3>
			</div>
			
			<div class="box-body">
				<?php echo Form::open(array('url'=>'/admin/sewa', 'method'=>'POST')); ?>


				<div class="form-group has-feedback<?php echo e($errors->has('member_id') ? ' has-error' : ''); ?>">
					<?php echo Form::label('member_id', 'Nama Penyewa'); ?>


					<?php echo Form::select('member_id', App\Member::pluck('nama','id')->all(), null, ['class' => 'form-control js-select2']); ?>

					<?php echo $errors->first('member_id', '<p class="help-block">:message</p>'); ?>

				</div>

				<div class="form-group has-feedback<?php echo e($errors->has('hotel_id_awal') ? ' has-error' : ''); ?>">
					<?php echo Form::label('hotel_id_awal', 'Hotel Sewa Sepeda'); ?>


					<?php echo Form::select('hotel_id_awal', App\Hotel::pluck('nama','id')->all(), null, ['class' => 'form-control js-select2']); ?>

					<?php echo $errors->first('hotel_id_awal', '<p class="help-block">:message</p>'); ?>

				</div>

				<div class="form-group has-feedback<?php echo e($errors->has('bike_id') ? ' has-error' : ''); ?>">
					<?php echo Form::label('bike_id', 'Kode Sepeda'); ?>


					<?php echo Form::select('bike_id', App\Bike::pluck('merek_sepeda','id')->all(), null, ['class' => 'form-control js-select2']); ?>

					<?php echo $errors->first('bike_id', '<p class="help-block">:message</p>'); ?>

				</div>
				<?php echo Form::button('<i class="fa fa-plus-square"></i>'.' Simpan', array('type'=>'submit', 'class'=>'btn btn-primary')); ?>

				
			</div>

<?php echo Form::close(); ?> 

		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>

		
<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>