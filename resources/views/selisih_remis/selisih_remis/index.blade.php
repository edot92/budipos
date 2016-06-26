@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Selisih_remis <a href="{{ url('/selisih_remis/create') }}" class="btn btn-primary btn-xs" title="Add New Selisih_remi"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th> Nama Kantor </th>
                    <th> Uang Tunai </th>
                    <th> Uang Non Tunai </th> 
                    <th> Jumlah Uang Tunai </th>
                    <th> JUmlah Uang Non Tunai </th> 
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($selisih_remis as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td>{{ $item->nama_kantor }}</td>
                    <td>{{ $item->uang_tunai }}</td>
                    <td>{{ $item->uang_non_tunai }}</td>
                    <td>{{ $item->jumlah_uang_tunai }}</td>
                    <td>{{ $item->jumlah_uang_non_tunai }}</td>
                        <a href="{{ url('/selisih_remis/' . $item->id) }}" class="btn btn-success btn-xs" title="View Selisih_remi"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                        <a href="{{ url('/selisih_remis/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Selisih_remi"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['/selisih_remis', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Selisih_remi" />', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Selisih_remi',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ));!!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination-wrapper"> {!! $selisih_remis->render() !!} </div>
    </div>

</div>
@endsection
