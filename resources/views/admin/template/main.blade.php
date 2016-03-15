
<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>@yield('title','Default') | Panel de administracion</title>
		<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
	</head>
	<body>
	@include('admin.template.partials.nav')
	<section>
		@yield('content')
	</section>
	<footer>
		
	</footer>

	<script src="{{ asset('plugins/jquery/jquery-2.2.1.js') }}"></script>	
	<script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
	</body>
</html>