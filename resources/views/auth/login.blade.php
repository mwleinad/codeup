@extends('layouts.default')

@section('content')
	<h1>Login</h1>
	
	@include('helpers.errors')


	<div class="row">
		<form method="POST" action="/auth/login" class="col-md-6">
			@include('auth/loginForm')
		</form>
	</div>
@stop