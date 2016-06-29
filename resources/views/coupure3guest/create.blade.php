@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Create New coupure3guest</h1>
    <hr/>

    {!! Form::open(['url' => '/coupure3guest', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('nama_kantor') ? 'has-error' : ''}}">
                {!! Form::label('nama_kantor', 'Nama Kantor', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('nama_kantor', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('nama_kantor', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('keping') ? 'has-error' : ''}}">
                {!! Form::label('keping', 'Keping', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('keping', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('keping', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('besaruang') ? 'has-error' : ''}}">
                {!! Form::label('besaruang', 'Besaruang', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('besaruang', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('besaruang', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Create', ['class' => 'btn btn-primary form-control']) !!}
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