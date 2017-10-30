<!DOCTYPE html>
<html>
<head>
	<title>La Cucina</title>

	<!-- Fonts -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link href='https://fonts.googleapis.com/css?family=Fira+Sans:400,300italic,400italic,500,700,700italic' rel='stylesheet' type='text/css'>

	<!-- Styles -->
	<link rel="stylesheet" type="text/css" href="/css/app.css">

</head>

<body class="body-wrapper">

	<div class="content-wrapper">
		@yield('content')
	</div>

	@include('templates.footer')
	<!-- Scripts -->
	<script src="https://code.jquery.com/jquery-2.2.3.min.js" integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="/js/application.js"></script>
</body>
</html>