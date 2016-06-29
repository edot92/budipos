@extends('layouts.app')

@section('content')
<div class="container">

    <h1>coupure6 {{ $coupure6->id }}</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tbody>
                <tr>
                    <th>ID.</th><td>{{ $coupure6->id }}</td>
                </tr>
                <tr><th> Nama Kantor </th><td> {{ $coupure6->nama_kantor }} </td></tr><tr><th> Keping </th><td> {{ $coupure6->keping }} </td></tr><tr><th> Besaruang </th><td> {{ $coupure6->besaruang }} </td></tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2">
                        <a href="{{ url('coupure6/' . $coupure6->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit coupure6"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['coupure6', $coupure6->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete coupure6',
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