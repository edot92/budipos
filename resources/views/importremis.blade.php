@extends('layouts.app')

@section('content')

	
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">IMPORT EXPORT REMIS</a>
			</div>
		</div>
	</nav>
	<div class="container">
		<a href="{{ URL::to('downloadExcel/xls') }}"><button class="btn btn-success">Download Excel xls</button></a>
		<a href="{{ URL::to('downloadExcel/xlsx') }}"><button class="btn btn-success">Download Excel xlsx</button></a>
		<a href="{{ URL::to('downloadExcel/csv') }}"><button class="btn btn-success">Download CSV</button></a>
	
		<form style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 10px;" action="{{ 
			URL::to('importExcel') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
<fieldset class="formfldset">
			{{ csrf_field() }}
			<input type="file" name="import_file" />
	
			<button class="btn btn-primary">Import File</button>
	
		</fieldset>
		</form>

	</div>
@endsection
