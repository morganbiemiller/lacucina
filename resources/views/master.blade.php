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

<body>
	<nav class="navbar">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/"><img src="/img/new-logo.png"></a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">			
				<ul class="nav navbar-nav navbar-right" id="nav">
					<li><a href="{{ url('/about') }}">About</a></li>
					<li><a href="{{ url('/events') }}">Services</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menus <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="{{ url('/horsdoeuvres') }}">Hors D'oeuvres</a></li>
							<li><a href="{{ url('/salads') }}">Salads</a></li>
							<li><a href="{{ url('/pans') }}">Pans & platters</a></li>
							<li><a href="{{ url('/buffets') }}">Buffets</a></li>
							<li><a href="{{ url('/desserts') }}">Desserts</a></li>
						</ul>
					</li>
					<li><a href="{{ url('/contact') }}">Contact</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
	@yield('content')
	<footer>
		<div class="container-fluid">
			<ul>
				<li>© 2016 La Cucina. All rights reserved.</li>
			</ul>
		</div>
	</footer>

	<!-- Scripts -->
	<script src="https://code.jquery.com/jquery-2.2.3.min.js" integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="/js/application.js"></script>
</body>
</html>