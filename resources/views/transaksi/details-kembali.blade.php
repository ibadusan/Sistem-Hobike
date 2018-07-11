@extends('adminlte::page')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Sistem Hobike | Penyewaan Sepeda di Kota Semarang</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-danger" href="{{ route('home')}}"> Kembali</a>
        </div>
    </div>
</div>


@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<div class="row">
    <div class="col-md-6">
        <div class="box">

           {{--  {!! Form::model($sewas) !!}
            @include('transaksi.form-kembali')
            {!! Form::close() !!} --}}

           {{--  {!! Form::model($sewas, ['method' => 'PATCH','route' => ['transaksi.update', $sewas->id]]) !!}
            @include('transaksi.form-kembali')
            {!! Form::close() !!} --}}

            {!! Form::model($sewas, ['route' => ['sewa.update', $sewas->id], 'method' => 'patch']) !!}

            @include('transaksi.form-kembali2')

            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection