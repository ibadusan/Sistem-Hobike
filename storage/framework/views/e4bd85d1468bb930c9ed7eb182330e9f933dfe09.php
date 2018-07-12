<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <strong>Id Hotel:</strong>
            <?php echo Form::text('id', null, array('placeholder' => 'Id Hotel','class' => 'form-control')); ?>

        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <strong>Nama Hotel:</strong>
            <?php echo Form::text('nama', null, array('placeholder' => 'Nama Hotel','class' => 'form-control')); ?>

        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <strong>Alamat Hotel:</strong>
            <?php echo Form::text('alamat', null, array('placeholder' => 'Alamat Hotel','class' => 'form-control')); ?>

        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <strong>Kode Pos Hotel:</strong>
            <?php echo Form::text('kodepos', null, array('placeholder' => 'Kode Pos Hotel','class' => 'form-control')); ?>

        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <strong>Bujur:</strong>
            <?php echo Form::text('bujur', null, array('placeholder' => 'Koordinat Bujur','class' => 'form-control')); ?>

        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <strong>Lintang:</strong>
            <?php echo Form::text('lintang', null, array('placeholder' => 'Koordinat Lintang','class' => 'form-control')); ?>

        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-4 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
    </div>

</div>