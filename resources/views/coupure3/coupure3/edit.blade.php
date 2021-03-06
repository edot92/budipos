@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Edit coupure3 {{ $coupure3->id }}</h1>

    {!! Form::model($coupure3, [
        'method' => 'PATCH',
        'url' => ['/coupure3', $coupure3->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('nama_kantor') ? 'has-error' : ''}}">
                {!! Form::label('nama_kantor', 'Nama Kantor', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('nama_kantor', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('nama_kantor', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('keping') ? 'has-error' : ''}}">
                {!! Form::label('keping', 'Keping', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('keping', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('keping', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('besar_uang') ? 'has-error' : ''}}">
                {!! Form::label('besar_uang', 'Besar Uang', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('besar_uang', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('besar_uang', '<p class="help-block">:message</p>') !!}
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