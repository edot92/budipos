@extends('layouts.app')

@section('content')
<div class="container">

    <h1>selisih_remisguest {{ $selisih_remisguest->id }}</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tbody>
                <tr>
                    <th>ID.</th><td>{{ $selisih_remisguest->id }}</td>
                </tr>
                <tr><th> Nama Kantor </th><td> {{ $selisih_remisguest->nama_kantor }} </td></tr><tr><th> Uang Tunai </th><td> {{ $selisih_remisguest->uang_tunai }} </td></tr><tr><th> Uang Non Tunai </th><td> {{ $selisih_remisguest->uang_non_tunai }} </td></tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2">
                        <a href="{{ url('selisih_remisguest/' . $selisih_remisguest->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit selisih_remisguest"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['selisih_remisguest', $selisih_remisguest->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete selisih_remisguest',
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