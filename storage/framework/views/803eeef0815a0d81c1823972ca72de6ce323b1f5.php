<?php $__env->startSection('content'); ?>
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>Sistem Hobike | Penyewaan Sepeda di Kota Semarang</h2>
		</div>
		<div class="pull-right">
			<a class="btn btn-danger" href="<?php echo e(route('home')); ?>"> Kembali</a>
		</div>
	</div>
</div>

    


    <?php if($message = Session::get('success')): ?>
    <div class="alert alert-success">
    	<p><?php echo e($message); ?></p>
    </div>
    <?php endif; ?>

    <?php
    	$dt = Carbon\Carbon::now('Asia/Bangkok');

    	echo "$dt<br>";

// set some things
    	//$dt->year   = 2015;
    	//$dt->month  = 04;
    	//$dt->day    = 21;
    	//$dt->hour   = 22;
    	//$dt->minute = 32;
    	//$dt->second = 5;

// get some things
    //echo "($dt->year)<br>";
    	//var_dump($dt->month);
    	//var_dump($dt->day);
    	//var_dump($dt->hour);
    	//var_dump($dt->second);
    	//var_dump($dt->dayOfWeek);
    	//var_dump($dt->dayOfYear);
    	//var_dump($dt->weekOfMonth);
    	//var_dump($dt->daysInMonth);

    	
    	?>



    
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>