<?php $__env->startSection('content'); ?>

<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2> Show Data Hotel</h2>
		</div>
		<div class="pull-right">
			<a class="btn btn-primary" href="<?php echo e(route('sewa.index')); ?>"> Back</a>
		</div>
	</div>
</div>


<div class="row">
	<div class="col-md-6">
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">Detail Transaksi</h3>
			</div>
			<div class="box-body">
				<!-- Id Field -->
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
						<strong>No Sewa:</strong>

						<?php echo e($sewas->id); ?>

					</div>
				</div>

				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
						<strong>Nama Penyewa:</strong>

						<?php echo e($sewas->member->nama); ?>

					</div>
				</div>

				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
						<strong>Id Sepeda:</strong>

						<?php echo e($sewas->bike->kode_sepeda); ?>

					</div>
				</div>

				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
						<strong>Hotel Sewa:</strong>
						<?php echo e($sewas->hotelAwal->nama); ?>

					</div>
				</div>

				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
						<strong>Hotel Kembali:</strong>
						<?php echo e($sewas->hotelKembali->nama); ?>

					</div>
				</div>

				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
						<strong>Total Harga:</strong>
						<?php echo e($sewas->total); ?>

					</div>
				</div>

				<!-- Created At Field -->
				<div class="col-xs-12 col-sm-12 col-md-12">
					<?php echo Form::label('created_at', 'Waktu Pinjam:'); ?>

					<p><?php echo $sewas->created_at; ?></p>
				</div>

				<!-- Updated At Field -->
				<div class="col-xs-12 col-sm-12 col-md-12">
					<?php echo Form::label('updated_at', 'Waktu Pengembalian:'); ?>

					<p><?php echo $sewas->updated_at; ?></p>
				</div>

				<div class="col-xs-12 col-sm-12 col-md-12">
					<?php echo Form::label('updated_at', 'Tangal:'); ?>

					<p><?php echo $sewas->updated_at->format("l jS \\of F Y"); ?></p>
				</div>
				
			</div>
			
			
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>