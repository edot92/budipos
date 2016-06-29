@extends('layouts.app')

@section('content')
<div class="container">

    <h1>coupure3 {{ $coupure3->id }}</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tbody>
                <tr>
                    <th>ID.</th><td>{{ $coupure3->id }}</td>
                </tr>
                <tr><th> Nama Kantor </th><td> {{ $coupure3->nama_kantor }} </td></tr><tr><th> Keping </th><td> {{ $coupure3->keping }} </td></tr><tr><th> Besar Uang </th><td> {{ $coupure3->besar_uang }} </td></tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2">
                        <a href="{{ url('coupure3/' . $coupure3->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit coupure3"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['coupure3', $coupure3->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete coupure3',
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