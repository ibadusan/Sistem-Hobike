@extends('adminlte::page')

@section('content')

@if (count($errors) < 0)
<div class="alert alert-danger">
	<strong>Whoops!</strong> There were some problems with your input.<br><br>
	<ul>
		@foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif

<div class="row">
	<div class="col-md-6">
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">Kembalikan Sepeda</h3>
			</div>

			<form action="{{ route('sewa.update', $sewas->id)}}" method="POST">
				@csrf
				@method('PUT')
				{{-- {{csrf_field()}}
				{{method_field('PUT')}} --}}
				{{-- <div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<strong>Nama Penyewa</strong>
							<input type="text" name="nama" value="{{ $sewas->namamember}}">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<strong>Hotel Tempat Sewa</strong>
							<input type="text" name="nama" value="{{ $sewas->nama}}">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<strong>Kode Sepeda</strong>
							<input type="text" name="nama" value="{{ $sewas->bikeid}}">
						</div>
					</div>
				</div> --}}
				<div class="form-group has-feedback{{ $errors->has('member_id') ? ' has-error' : '' }}">
					{!! Form::label('member_id', 'Nama Penyewa') !!}

					{!! Form::select('member_id', App\Member::pluck('nama','id')->all(), null, ['class' => 'form-control js-select2']) !!}
					{!! $errors->first('member_id', '<p class="help-block">:message</p>') !!}
				</div>

				<div class="form-group has-feedback{{ $errors->has('hotel_id_awal') ? ' has-error' : '' }}">
					{!! Form::label('hotel_id_awal', 'Hotel Sewa Sepeda') !!}

					{!! Form::select('hotel_id_awal', App\Hotel::pluck('nama','id')->all(), null, ['class' => 'form-control js-select2']) !!}
					{!! $errors->first('hotel_id_awal', '<p class="help-block">:message</p>') !!}
				</div>

				<div class="form-group has-feedback{{ $errors->has('bike_id') ? ' has-error' : '' }}">
					{!! Form::label('bike_id', 'Kode Sepeda') !!}

					{!! Form::select('bike_id', App\Bike::pluck('merek_sepeda','id')->all(), null, ['class' => 'form-control js-select2']) !!}
					{!! $errors->first('bike_id', '<p class="help-block">:message</p>') !!}
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<strong>Tanggal Sewa</strong>
							{{-- <input type="text" name="nama" value="{{ $sewas->nama}}"> --}}
							<label > {{ Carbon\Carbon::parse($sewas->created_at)->format("Y-m-d")}}</label>	
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<strong>Waktu Sewa</strong>
							{{-- <input type="text" name="nama" value="{{ $sewas->nama}}"> --}}
							<label > {{ Carbon\Carbon::parse($sewas->created_at)->format("H:i:s")}}</label>	
						</div>
					</div>
				</div>

				<div class="form-group has-feedback{{ $errors->has('hotel_id_kembali') ? ' has-error' : '' }}">
					{!! Form::label('hotel_id_kembali', 'Hotel Kembalikan Sepeda') !!}

					{!! Form::select('hotel_id_kembali', App\Hotel::pluck('nama','id')->all(), null, ['class' => 'form-control js-select2']) !!}
					{!! $errors->first('hotel_id_kembali', '<p class="help-block">:message</p>') !!}
				</div>
				
				<div class="row">
					<div class="col-md-6">
						<button type="submit" class="btn btn-primary">Kembalikan</button>
						
					</div>	
				</div>

				
				
			</form>

		</div>
	</div>
</div>
@endsection

		{{-- <div class="pull-right">
			<a class="btn btn-primary" href="{{ route('transaksi.index') }}"> Back</a>
		</div> --}}