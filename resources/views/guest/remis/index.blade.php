@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Remis</h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th> {{ trans('remis.denomasi') }} </th>
                    <th> {{ trans('remis.jumlah') }} </th>
                    <th> {{ trans('remis.total') }} </th>
                    <th> {{ trans('remis.keterangan') }} </th>
                </tr>
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
             
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $remis->render() !!} </div>
    </div>

</div>
@endsection
