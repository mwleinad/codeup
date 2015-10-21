@extends('layouts.default')

@section('content')
	<h1>{{ $link->linkName }}</h1>
	<div class="description"><a href="{{ $link->link }}" target="_blank">{{ $link->link }}</a></div>
	<div>{{ $link->points}} points 

		@if ($user && !$user->owns($link))
			| Upvote | Downvote
		@else
			| This is your link!
		@endif

	</div> 

@stop