<html>
	<head>
		<title> Bibliotec - @yield('title') </title>
		<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
		<nav class="navbar navbar-dark" style="background: linear-gradient(to bottom right,  #1b2631 , #2e4053 , #34495e , #5d6d7e)">
			<a href="#" class="navbar-brand">Bibliotec</a>
		</nav>
	</head>
	<body>
		<div class="container" style="margin-top: 30px">	
		@yield('content')
		</div>
	</body>
</html>

