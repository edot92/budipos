@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Selisih_remi {{ $selisih_remi->id }}
        <a href="{{ url('selisih_remis/' . $selisih_remi->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Selisih_remi"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
        {!! Form::open([
            'method'=>'DELETE',
            'url' => ['selisih_remis', $selisih_remi->id],
            'style' => 'display:inline'
        ]) !!}
            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                    'type' => 'submit',
                    'class' => 'btn btn-danger btn-xs',
                    'title' => 'Delete Selisih_remi',
                    'onclick'=>'return confirm("Confirm delete?")'
            ));!!}
        {!! Form::close() !!}
    </h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tbody>
                <tr>
                    <th>ID</th><td>{{ $selisih_remi->id }}</td>
                </tr>
                <tr><th> {{ trans('Nama Kantor')}} </th><td> {{ $selisih_remi->nama_kantor }} </td></tr>
                <tr><th>  {{ trans('uang Tunai')}} </th><td> {{ $selisih_remi->uang_tunai }} </td></tr>
                <tr><th> {{ trans('Uang Non Tunai')}} </th><td> {{ $selisih_remi->uang_non_tunai }} </td></tr>
                <tr><th> {{ trans('jumlah uang Tunai')}} </th><td> {{ $selisih_remi->jumlah_uang_tunai }} </td></tr>
                <tr><th> {{ trans('junmlah uang non tunai')}} </th><td> {{ $selisih_remi->jumlah_uang_non_tunai }} </td></tr>
            </tbody>
        </table>
    </div>

</div>
@endsection
