@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Selisih_remisguest {{-- <a href="{{ url('/selisih_remisguest/create') }}" class="btn btn-primary btn-xs" title="Add New selisih_remisguest"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a> --}}</h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th> Nama Kantor </th><th> Uang Tunai </th><th> Uang Non Tunai </th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($selisih_remisguest as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td>{{ $item->nama_kantor }}</td><td>{{ $item->uang_tunai }}</td><td>{{ $item->uang_non_tunai }}</td>
                   {{--  <td>
                        <a href="{{ url('/selisih_remisguest/' . $item->id) }}" class="btn btn-success btn-xs" title="View selisih_remisguest"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                        <a href="{{ url('/selisih_remisguest/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit selisih_remisguest"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['/selisih_remisguest', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete selisih_remisguest" />', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete selisih_remisguest',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ));!!}
                        {!! Form::close() !!}
                    </td> --}}
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $selisih_remisguest->render() !!} </div>
    </div>

</div>
@endsection
