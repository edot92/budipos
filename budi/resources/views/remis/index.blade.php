@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Remis <a href="{{ url('/remis/create') }}" class="btn btn-primary btn-xs" title="Add New Remi"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
               <th>S.No</th>
                    <th> {{ trans('remis.denomasi') }} </th>
                    <th> {{ trans('remis.jumlah') }} </th>
                    <th> {{ trans('remis.total') }} </th>
                    <th> {{ trans('remis.keterangan') }} </th>
                     <th>ACTION</th>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($remis as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td>{{ $item->denomasi }}</td>
                    <td>{{ $item->jumlah }}</td>
                    <td>{{ $item->total }}</td>
                    <td>{{ $item->keterangan }}</td>
                    <td>
                        <a href="{{ url('/remis/' . $item->id) }}" class="btn btn-success btn-xs" title="View Remi"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                        <a href="{{ url('/remis/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Remi"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['/remis', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Remi" />', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Remi',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ));!!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $remis->render() !!} </div>
    </div>

</div>
@endsection
