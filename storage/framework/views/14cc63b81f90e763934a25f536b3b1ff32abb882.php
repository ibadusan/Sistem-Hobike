<div class="box-body">
    
    <div class="form-group has-feedback<?php echo e($errors->has('member_id') ? 'has-error' : ''); ?>">
    <?php echo Form::label('member_id', 'Nama Penyewa'); ?>

    <?php echo Form::select('member_id', App\Member::pluck('nama', 'id')->all(), null, ['class' => 'form-control js-select2']); ?>

    <?php echo $errors->first('member_id', '<p class="help-block">:message'); ?>   
    </div>
    <div class="form-group has-feedback<?php echo e($errors->has('hotel_id') ? 'has-error' : ''); ?>">
    <?php echo Form::label('hotel_id', 'Hotel Tempat Sewa'); ?>

    <?php echo Form::select('hotel_id', App\Hotel::pluck('nama', 'id')->all(), null, ['class' => 'form-control js-select2']); ?>

    <?php echo $errors->first('hotel_id', '<p class="help-block">:message'); ?>   
    </div>

    <div class="form-group has-feedback<?php echo e($errors->has('bike_id')? 'has-error' :''); ?>">
    <?php echo Form::label('bike_id', 'Sepeda'); ?>

    <?php echo Form::select('bike_id', App\Bike::pluck('merek_sepeda', 'id')->all(),null, ['class' => 'form-control js-select2']); ?>

    <?php echo $errors->first('bike_id', '<p class="help-block">:message'); ?>

    </div>

    
</div>
<!-- /.box-body -->
<div class="box-footer">
    <?php echo Form::Submit('Simpan', ['class' => 'btn btn-primary']); ?>

</div>

<script type="text/javascript">

  $("select[nama='hotel_id']").change(function(){

      var hotel_id = $(this).val();

      var token = $("input[nama='_token']").val();

      $.ajax({

          url: "<?php echo route('select-ajax') ?>",

          method: 'POST',

          data: {hotel_id:hotel_id, _token:token},

          success: function(data) {

            $("select[name='bike_id'").html('');

            $("select[name='bike_id'").html(data.options);

          }

      });

  });

</script>

