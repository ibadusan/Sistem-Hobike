<div class="box-body">
    <table class="table table-bordered">
        <tr>
            <td class="text-muted" width="280px">ID</td>
            <td><?php echo e(auth()->user()->id); ?></td>
        </tr>
        <tr>
            <td class="text-muted" width="280px">Nama</td>
            <td><?php echo e(auth()->user()->name); ?></td>
        </tr>
        <tr>
            <td class="text-muted">Hotel Awal</td>
            <td><?php echo e(hotel()->nama); ?></td>
        </tr>
    </table>

    <?php $__currentLoopData = $sewas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sewa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <table class="table table-bordered">
        
       
        <tr>
            <td> <?php echo Form::label('hotel_id', 'Hotel Sewa'); ?></td>
            <td>
                <div class="form-group has-feedback<?php echo e($errors->has('hotel_id') ? 'has-error' : ''); ?>">
                    <?php echo Form::select('hotel_id', App\Hotel::pluck('nama', 'id')->all(), null, ['class' => 'form-control js-select2']); ?>

                    <?php echo $errors->first('hotel_id', '<p class="help-block">:message'); ?>   
                    </div>
                </td>
            </tr>
        </table>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <table class="table table-bordered">
           
            <tr>
                <td class="text-muted">Tanggal</td>
                
            </tr>
        </table>
    </div>

    <div class="box-footer">
        <?php echo Form::submit('Update', ['class' => 'btn btn-primary']); ?>

    </div>
