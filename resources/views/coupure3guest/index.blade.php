@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Coupure3guest <a href="{{ url('/coupure3guest/create') }}" class="btn btn-primary btn-xs" title="Add New coupure3guest"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th> Nama Kantor </th><th> Keping </th><th> Besaruang </th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($coupure3guest as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td>{{ $item->nama_kantor }}</td><td>{{ $item->keping }}</td><td>{{ $item->besaruang }}</td>
                    <td>
                        <a href="{{ url('/coupure3guest/' . $item->id) }}" class="btn btn-success btn-xs" title="View coupure3guest"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                        <a href="{{ url('/coupure3guest/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit coupure3guest"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['/coupure3guest', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete coupure3guest" />', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete coupure3guest',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ));!!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $coupure3guest->render() !!} </div>
    </div>

</div>
@endsection
