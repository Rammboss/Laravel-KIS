<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'MoKi') }}</title>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<!-- Fonts -->
<link rel="dns-prefetch" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/moki.css') }}" rel="stylesheet">
<link href="{{ asset('css/content.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset("assets/stylesheets/styles.css") }}" />

<!-- Favicon -->
<link rel="shortcut icon" href="{{ asset('favicon.ico') }}">