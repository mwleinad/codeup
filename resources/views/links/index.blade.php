@extends('layouts.default')

@section('content')
	<h1>Reddit Links</h1>

	<div id="links" ng-controller="VotesController">

		@foreach($links as $link)
		<div class="description"><a href="{{ $link->link }}" target="_blank">{{ $link->linkName }}</a> by {{$link->user->name}}</div>
		<div><span id="item-{{ $link->id}}" ng-hide="voted[{{ $link->id}}]">{{ $link->points}}</span><span ng-bind="points[{{ $link->id}}]"></span> points 

			<span ng-hide="voted[{{ $link->id}}]">	
				@if ($user && !$user->owns($link))
					| <a href="#" ng-click="upvote({{ $link->id}});">Upvote</a> | <a href="#" ng-click="downvote({{ $link->id}});">Downvote</a>
				@else
					| This is your link!
				@endif
			</span>

		</div> 
		<hr>
		@endforeach
	</div>
@stop