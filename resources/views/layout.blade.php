<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hatebook</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<body>
	<h1>Hatebook</h1>
	<!-- Agregamos una sección donde mando llamar a la vista de mis posts -->
	<div class="container">
	@yield('content')
	</div>

	<footer><i>Mi pinche red social</i></footer>
</body>
</html>