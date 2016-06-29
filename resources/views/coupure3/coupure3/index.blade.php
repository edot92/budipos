@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Coupure3 <a href="{{ url('/coupure3/create') }}" class="btn btn-primary btn-xs" title="Add New coupure3"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th> Nama Kantor </th><th> Keping </th><th> Besar Uang </th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($coupure3 as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td>{{ $item->nama_kantor }}</td><td>{{ $item->keping }}</td><td>{{ $item->besar_uang }}</td>
                    <td>
                        <a href="{{ url('/coupure3/' . $item->id) }}" class="btn btn-success btn-xs" title="View coupure3"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                        <a href="{{ url('/coupure3/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit coupure3"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['/coupure3', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete coupure3" />', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete coupure3',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ));!!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $coupure3->render() !!} </div>
    </div>

</div>
@endsection
