@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Remi {{ $remi->id }}</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tbody>
                <tr>
                    <th>ID.</th><td>{{ $remi->id }}</td>
                </tr>
                <tr><th> {{ trans('remis.denomasi') }} </th><td> {{ $remi->denomasi }} </td></tr><tr><th> {{ trans('remis.jumlah') }} </th><td> {{ $remi->jumlah }} </td></tr><tr><th> {{ trans('remis.total') }} </th><td> {{ $remi->total }} </td></tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2">
                        <a href="{{ url('remis/' . $remi->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Remi"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['remis', $remi->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Remi',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ));!!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>

</div>
@endsection