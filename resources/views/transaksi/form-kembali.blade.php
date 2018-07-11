<div class="box-body">
    <table class="table table-bordered">
        <tr>
            <td class="text-muted" width="280px">ID</td>
            <td>{{ auth()->user()->id }}</td>
        </tr>
        <tr>
            <td class="text-muted" width="280px">Nama</td>
            <td>{{ auth()->user()->name }}</td>
        </tr>
        <tr>
            <td class="text-muted">Hotel Awal</td>
            <td>{{ hotel()->nama }}</td>
        </tr>
    </table>

    @foreach($sewas as $sewa)
    <table class="table table-bordered">
        {{-- <tr>
            <td class="text-muted" width="280px">Id Sepeda</td>
            <td>{{ $sewa->bikeid }}</td>
        </tr> --}}
       {{--  <tr>
            <td class="text-muted">Hotel Awal</td>
            <td>{{ $sewa->nama}}</td>
        </tr> --}}
        <tr>
            <td> {!! Form::label('hotel_id', 'Hotel Sewa') !!}</td>
            <td>
                <div class="form-group has-feedback{{ $errors->has('hotel_id') ? 'has-error' : '' }}">
                    {!! Form::select('hotel_id', App\Hotel::pluck('nama', 'id')->all(), null, ['class' => 'form-control js-select2']) !!}
                    {!! $errors->first('hotel_id', '<p class="help-block">:message') !!}   
                    </div>
                </td>
            </tr>
        </table>
        @endforeach

        <table class="table table-bordered">
           {{--  <tr>
                <td class="text-muted" width="280px">Jam Pinjam</td>
                <td>{{ $sewa->created_at }}</td>
            </tr> --}}
            <tr>
                <td class="text-muted">Tanggal</td>
                {{-- <td>{{ $now }}</td> --}}
            </tr>
        </table>
    </div>

    <div class="box-footer">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    </div>
