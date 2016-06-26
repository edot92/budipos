@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Edit Selisih_remi {{ $selisih_remi->id }}</h1>

    {!! Form::model($selisih_remi, [
        'method' => 'PATCH',
        'url' => ['/selisih_remis', $selisih_remi->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('nama_kantor') ? 'has-error' : ''}}">
                {!! Form::label('nama_kantor', 'Nama Kantor', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('nama_kantor', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('nama_kantor', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('uang_tunai') ? 'has-error' : ''}}">
                {!! Form::label('uang_tunai', 'Uang Tunai', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('uang_tunai', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('uang_tunai', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('uang_non_tunai') ? 'has-error' : ''}}">
                {!! Form::label('uang_non_tunai', 'Uang Non Tunai', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('uang_non_tunai', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('uang_non_tunai', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('jumlah_uang_non_tunai') ? 'has-error' : ''}}">
                {!! Form::label('jumlah_uang_non_tunai', 'Jumlah Uang Non Tunai', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('jumlah_uang_non_tunai', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('jumlah_uang_non_tunai', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('jumlah_uang_tunai') ? 'has-error' : ''}}">
                {!! Form::label('jumlah_uang_tunai', 'Jumlah Uang Tunai', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('jumlah_uang_tunai', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('jumlah_uang_tunai', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

</div>
@endsection