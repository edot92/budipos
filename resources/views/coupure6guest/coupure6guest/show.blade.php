@extends('layouts.app')

@section('content')
<div class="container">

    <h1>coupure6guest {{ $coupure6guest->id }}</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tbody>
                <tr>
                    <th>ID.</th><td>{{ $coupure6guest->id }}</td>
                </tr>
                <tr><th> Nama Kantor </th><td> {{ $coupure6guest->nama_kantor }} </td></tr><tr><th> Keping </th><td> {{ $coupure6guest->keping }} </td></tr><tr><th> Besaruang </th><td> {{ $coupure6guest->besaruang }} </td></tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2">
                        <a href="{{ url('coupure6guest/' . $coupure6guest->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit coupure6guest"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['coupure6guest', $coupure6guest->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete coupure6guest',
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