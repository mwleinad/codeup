@extends('layouts.default')

@section('content')
	<h1>Register</h1>
	
	@include('helpers.errors')

	<div class="row">
		<form method="POST" action="/auth/register" class="col-md-6">
			@include('auth/registerForm')
		</form>
	</div>
@stop