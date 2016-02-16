<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('title') | Admin</title>
	<link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('css/admin/estilos.css')}}">
</head>
<body class="admin-body">
	
	@include('admin.template.partials.nav')

	<section class="section-admin">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">@yield('title')</h3>
			</div>
			<div class="panel-body">
				@include('flash::message')
				@include('admin.template.partials.errors')
				@yield('content')
			</div>
		</div>
	</section>
	
	<script src="{{asset('plugins/jquery/js/jquery-1.12.0.js')}}"></script>
	<script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script>
</body>
</html>