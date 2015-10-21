<!DOCTYPE html>
<html ng-app="votes">
<head>
  <meta charset="UTF-8">
  <title>Reddit</title>
  <link rel="stylesheet" href='/css/app.css' />
  <link rel="stylesheet" href='/css/libs.css' />
</head>
<body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ URL::route('home') }}">Reddit Project</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="/links">Links</a></li>
          </ul>

          @if ($signedIn)
          <p class="navbar-text navbar-right">
              Hello, {{ $user->name }}
          </p>
          @endif
        </div><!--/.nav-collapse -->
      </div>
    </nav>

	<div class="container">
		@yield ('content')
	</div>
</body>
</html>

<script src="/js/libs.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>

<script src="/js/vote.js"></script>
@include('helpers.flash')