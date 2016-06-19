@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Edit Remi {{ $remi->id }}</h1>

    {!! Form::model($remi, [
        'method' => 'PATCH',
        'url' => ['/remis', $remi->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('denomasi') ? 'has-error' : ''}}">
                {!! Form::label('denomasi', trans('remis.denomasi'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('denomasi', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('denomasi', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('jumlah') ? 'has-error' : ''}}">
                {!! Form::label('jumlah', trans('remis.jumlah'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('jumlah', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('jumlah', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('total') ? 'has-error' : ''}}">
                {!! Form::label('total', trans('remis.total'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('total', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('total', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('keterangan') ? 'has-error' : ''}}">
                {!! Form::label('keterangan', trans('remis.keterangan'), ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('keterangan', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('keterangan', '<p class="help-block">:message</p>') !!}
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