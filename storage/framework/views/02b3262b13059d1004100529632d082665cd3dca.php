<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nama Hotel:</strong>
            <?php echo Form::text('nama', null, array('placeholder' => 'Nama Hotel','class' => 'form-control')); ?>

        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Alamat Hotel:</strong>
            <?php echo Form::text('alamat', null, array('placeholder' => 'Alamat Hotel','class' => 'form-control')); ?>

        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Kode Pos Hotel:</strong>
            <?php echo Form::text('kodepos', null, array('placeholder' => 'Kode Pos Hotel','class' => 'form-control')); ?>

        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
    </div>

</div>