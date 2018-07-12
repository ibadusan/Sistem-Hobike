<div class="box-body">
    <table class="table table-bordered">
    <div class="col-xs-12 col-sm-12 col-md-4">
        <div class="form-group">
            <strong>Nama Penyewa</strong>
            <?php echo Form::text('namamember', null, array('placeholder' => 'Nama','class' => 'form-control')); ?>

        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-4">
        <div class="form-group">
            <strong>Nama Hotel</strong>
            <?php echo Form::text('nama', null, array('placeholder' => 'Nama','class' => 'form-control')); ?>

        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-4">
        <div class="form-group">
            <strong>ID Sepeda</strong>
            <?php echo Form::text('bike_id', null, array('placeholder' => 'Nama','class' => 'form-control')); ?>

        </div>
    </div>

    <div class="form-group has-feedback<?php echo e($errors->has('hotel_id_kembali') ? 'has-error' : ''); ?>">
    <?php echo Form::label('hotel_id_kembali', 'Hotel Tempat Kembali'); ?>

    <?php echo Form::select('hotel_id_kembali', App\Hotel::pluck('nama', 'id')->all(), null, ['class' => 'form-control js-select2']); ?>

    <?php echo $errors->first('hotel_id', '<p class="help-block">:message'); ?>   
    </div>

    <div class="col-xs-12 col-sm-12 col-md-4">
        <div class="form-group">
            <strong>Details Waktu Sewa</strong>
            <?php echo Form::text('created_at', null, array('placeholder' => 'Nama','class' => 'form-control')); ?>

        </div>
    </div>
    
</table>


    
</div>

<div class="box-footer">
    <?php echo Form::submit('Update', ['class' => 'btn btn-primary']); ?>

</div>
