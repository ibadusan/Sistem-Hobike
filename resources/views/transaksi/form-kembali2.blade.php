<div class="box-body">
    <table class="table table-bordered">
    <div class="col-xs-12 col-sm-12 col-md-4">
        <div class="form-group">
            <strong>Nama Penyewa</strong>
            {!! Form::text('namamember', null, array('placeholder' => 'Nama','class' => 'form-control')) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-4">
        <div class="form-group">
            <strong>Nama Hotel</strong>
            {!! Form::text('nama', null, array('placeholder' => 'Nama','class' => 'form-control')) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-4">
        <div class="form-group">
            <strong>ID Sepeda</strong>
            {!! Form::text('bike_id', null, array('placeholder' => 'Nama','class' => 'form-control')) !!}
        </div>
    </div>

    <div class="form-group has-feedback{{ $errors->has('hotel_id_kembali') ? 'has-error' : '' }}">
    {!! Form::label('hotel_id_kembali', 'Hotel Tempat Kembali') !!}
    {!! Form::select('hotel_id_kembali', App\Hotel::pluck('nama', 'id')->all(), null, ['class' => 'form-control js-select2']) !!}
    {!! $errors->first('hotel_id', '<p class="help-block">:message') !!}   
    </div>

    <div class="col-xs-12 col-sm-12 col-md-4">
        <div class="form-group">
            <strong>Details Waktu Sewa</strong>
            {!! Form::text('created_at', null, array('placeholder' => 'Nama','class' => 'form-control')) !!}
        </div>
    </div>
    {{-- @foreach($sewas as $sewa)
    <tr>
        <td>{{ $sewa->id}}</td>
        <td>{{ $sewa->namamember}}</td>
        <td>{{ $sewa->nama}}</td>
        <td>{{ $sewa->bikeid}}</td>
        <td>{{ $sewa->created_at}}</td>
        <td>
            <a class="btn btn-info" href="{{ route('transaksi.edit',$sewa->id) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-share-alt"></i></a>
        </td>
    </tr>
    @endforeach --}}
</table>


    
</div>

<div class="box-footer">
    {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
</div>
