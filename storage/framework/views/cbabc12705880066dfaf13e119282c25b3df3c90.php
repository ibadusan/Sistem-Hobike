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
				<h3 class="box-title">Kembalikan Sepeda</h3>
			</div>

			<form action="<?php echo e(route('sewa.update', $sewas->id)); ?>" method="POST">
				<?php echo csrf_field(); ?>
				<?php echo method_field('PUT'); ?>
				
				
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

				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<strong>Tanggal Sewa</strong>
							
							<label > <?php echo e(Carbon\Carbon::parse($sewas->created_at)->format("Y-m-d")); ?></label>	
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<strong>Waktu Sewa</strong>
							
							<label > <?php echo e(Carbon\Carbon::parse($sewas->created_at)->format("H:i:s")); ?></label>	
						</div>
					</div>
				</div>

				<div class="form-group has-feedback<?php echo e($errors->has('hotel_id_kembali') ? ' has-error' : ''); ?>">
					<?php echo Form::label('hotel_id_kembali', 'Hotel Kembalikan Sepeda'); ?>


					<?php echo Form::select('hotel_id_kembali', App\Hotel::pluck('nama','id')->all(), null, ['class' => 'form-control js-select2']); ?>

					<?php echo $errors->first('hotel_id_kembali', '<p class="help-block">:message</p>'); ?>

				</div>
				
				<div class="row">
					<div class="col-md-6">
						<button type="submit" class="btn btn-primary">Kembalikan</button>
						
					</div>	
				</div>

				
				
			</form>

		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>

		
<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>