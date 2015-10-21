@extends('layouts.default')

@section('content')
	     <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1>Mini Reddit</h1>
        <p>Little Project for CodeUp.</p>
        @if($signedIn)
			<a href="links/create" type="button" class="btn btn-lg btn-primary">Add Link</a>        
		@else
			<a href="auth/login" type="button" class="btn btn-lg btn-primary">Login</a>        
			<a href="auth/register" type="button" class="btn btn-lg btn-primary">Register</a>        
		@endif
      </div>

@stop