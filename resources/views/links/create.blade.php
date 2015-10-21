@extends('layouts.default')

@section('content')
	<h1>Add your Link</h1>
	
	@include('helpers.errors')


	<div class="row">
		<form method="POST" action="/links" class="col-md-6">
			@include('links/form')
		</form>
	</div>
@stop