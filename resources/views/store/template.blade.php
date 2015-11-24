<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title', 'Tienda Online')</title>
	<link rel="stylesheet" href="">

	<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/lumen/bootstrap.min.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Poiret+One|Lobster+Two' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
	@if(\Session::has('message'))
		@include('store.partials.message')
	@endif
	@include('store.partials.nav')
	@yield('content')
	@include('store.partials.footer')

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="{{ asset('js/jquery.pinto.min.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>