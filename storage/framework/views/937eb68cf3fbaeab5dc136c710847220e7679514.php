<div class="box-body">

    <div class="form-group has-feedback">
        <div class="form-group">
            <strong>Kode Sepeda:</strong>
            <?php echo Form::text('kode_sepeda', null, array('placeholder' => 'Kode Sepeda','class' => 'form-control')); ?>

        </div>
    </div>
   
    <div class="form-group has-feedback">
        <div class="form-group">
            <strong>Jenis Sepeda:</strong>
            <?php echo Form::select('jenis_sepeda', ['Double' => 'Double', 'Single' => 'Single']); ?>

        </div>
    </div>

    <div class="form-group has-feedback">
        <div class="form-group">
            <strong>Merek Sepeda:</strong>
            <?php echo Form::text('merek_sepeda', null, array('placeholder' => 'Merek Sepeda','class' => 'form-control')); ?>

        </div>
    </div>

    <div class="form-group has-feedback">
        <div class="form-group">
            <strong>Upload Foto Sepeda:</strong>
            <?php echo Form::file('image', array('class'=>'form-control', 'name'=>'image')); ?>

        </div>
    </div>
    

    <div class="form-group has-feedback">
            <button type="submit" class="btn btn-primary">Submit</button>
    </div>

</div>