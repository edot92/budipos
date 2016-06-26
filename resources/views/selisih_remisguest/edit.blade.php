@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Edit selisih_remisguest {{ $selisih_remisguest->id }}</h1>

    {!! Form::model($selisih_remisguest, [
        'method' => 'PATCH',
        'url' => ['/selisih_remisguest', $selisih_remisguest->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('nama_kantor') ? 'has-error' : ''}}">
                {!! Form::label('nama_kantor', 'Nama Kantor', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('nama_kantor', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('nama_kantor', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('uang_tunai') ? 'has-error' : ''}}">
                {!! Form::label('uang_tunai', 'Uang Tunai', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('uang_tunai', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('uang_tunai', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('uang_non_tunai') ? 'has-error' : ''}}">
                {!! Form::label('uang_non_tunai', 'Uang Non Tunai', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('uang_non_tunai', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('uang_non_tunai', '<p class="help-block">:message</p>') !!}
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