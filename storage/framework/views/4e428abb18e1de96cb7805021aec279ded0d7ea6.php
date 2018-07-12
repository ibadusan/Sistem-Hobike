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
				
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<strong>Nama Penyewa</strong>
							<input type="text" name="nama" value="<?php echo e($sewas->member->nama); ?>" placeholder="<?php echo e($sewas->member->nama); ?>">
							
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<strong>Hotel Tempat Sewa</strong>
							<input type="text" name="nama" value="<?php echo e($sewas->hotelAwal->nama); ?>">
							
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<strong>Kode Sepeda</strong>
							<input type="text" name="nama" value="<?php echo e($sewas->bike->kode_sepeda); ?>">
							
						</div>
					</div>
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