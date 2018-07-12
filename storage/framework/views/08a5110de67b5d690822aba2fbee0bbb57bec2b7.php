<div class="row">
   
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Jenis Sepeda:</strong>
            <?php echo Form::select('jenis_sepeda', ['Double' => 'Double', 'Single' => 'Single']); ?>

        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-4">
        <div class="form-group">
            <strong>Merek Sepeda:</strong>
            <?php echo Form::text('merek_sepeda', null, array('placeholder' => 'Merek Sepeda','class' => 'form-control')); ?>

        </div>
    </div>
    

    <div class="col-xs-12 col-sm-12 col-md-12">
            <button type="submit" class="btn btn-primary">Submit</button>
    </div>

</div>