@extends('layouts.app')

@section('content')
<div class="container">

    <h1>coupure3guest {{ $coupure3guest->id }}</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tbody>
                <tr>
                    <th>ID.</th><td>{{ $coupure3guest->id }}</td>
                </tr>
                <tr><th> Nama Kantor </th><td> {{ $coupure3guest->nama_kantor }} </td></tr><tr><th> Keping </th><td> {{ $coupure3guest->keping }} </td></tr><tr><th> Besaruang </th><td> {{ $coupure3guest->besaruang }} </td></tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2">
                        <a href="{{ url('coupure3guest/' . $coupure3guest->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit coupure3guest"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['coupure3guest', $coupure3guest->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete coupure3guest',
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