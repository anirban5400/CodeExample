<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="CodeExample">
    <meta name="author" content="Anirban"> 

    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <link rel="shortcut icon" href="favicon.ico"> 
    
       
    <script defer src="{{asset('backend/assets/plugins/fontawesome/js/all.min.js')}}"></script>
    <link id="theme-style" rel="stylesheet" href="{{asset('backend/assets/css/portal.css')}}">
	{{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}

</head> 

<body class="app">   	
    <header class="app-header fixed-top">
		@include('back_end.commons.topbar')
		@include('back_end.commons.sidebar')
	</header>
	<div class="app-wrapper">
		<div class="app-content pt-3 p-md-3 p-lg-4">
			@yield('content')
		</div>
		@include('back_end.commons.footer')
	</div>
	

	<script src="{{asset('backend/assets/plugins/popper.min.js')}}"></script>
	<script src="{{asset('backend/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('backend/assets/plugins/chart.js/chart.min.js')}}"></script>
	<script src="{{asset('backend/assets/js/index-charts.js')}}"></script>

	<script src="{{asset('backend/assets/js/app.js')}}"></script>
</body>
</html> 

