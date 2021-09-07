<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

	<!-- Favicons -->
	<link rel="shortcut icon" href="assets/img/favicon.png">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{asset('theme/assets/plugins/bootstrap/css/bootstrap.min.css')}}">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="{{asset('theme/assets/plugins/fontawesome/css/fontawesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('theme/assets/plugins/fontawesome/css/all.min.css')}}">

	<link rel="stylesheet" href="{{asset('theme/assets/css/bootstrap-datetimepicker.min.css')}}">

	<!-- Datatables CSS -->
	<link rel="stylesheet" href="{{asset('theme/assets/plugins/datatables/datatables.min.css')}}">

	<!-- Animate CSS -->
	<link rel="stylesheet" href="{{asset('theme/assets/css/animate.min.css')}}">

	<link rel="stylesheet" href="{{asset('theme/assets/css/select2.min.css')}}">

	<!-- Main CSS -->
	<link rel="stylesheet" href="{{asset('theme/assets/css/admin.css')}}">

</head>

<body>
	<div class="main-wrapper">
	
		<!-- Header -->
		@include('dashboard.components.header')
		<!-- /Header -->
		
		<!-- Sidebar -->
		@include('dashboard.components.sidebar')
		
		<!-- /Sidebar -->
		@yield('contenido')
		
	</div>

	<!-- jQuery -->
	<script src="{{asset('theme/assets/js/jquery-3.5.0.min.js')}}"></script>

	<!-- Bootstrap Core JS -->
	<script src="{{asset('theme/assets/js/popper.min.js')}}"></script>
	<script src="{{asset('theme/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

	<script src="{{asset('theme/assets/js/moment.min.js')}}"></script>
	<script src="{{asset('theme/assets/js/bootstrap-datetimepicker.min.js')}}"></script>

	<!-- Slimscroll JS -->
	<script src="{{asset('theme/assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

	<script src="{{asset('theme/assets/js/bootstrapValidator.min.js')}}"></script>

	<!-- Datatables JS -->
	<script src="{{asset('theme/assets/plugins/datatables/datatables.min.js')}}"></script>
	<script src="{{asset('theme/assets/js/select2.min.js')}}"></script>

	<!-- Custom JS -->
	<script src="{{asset('theme/assets/js/admin.js')}}"></script>

</body>

</html>