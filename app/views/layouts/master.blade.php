<!DOCTYPE html>
<html lang="es">
<head>
	<title>
		@section('title')
			Cursos
		@show
	</title>
	@section('header')
		<link rel="stylesheet" type="text/css" href="style.css">
	@show
</head>
<body>

	@yield('content')

	<footer>
		@yield('foot')
	</footer>

</body>
</html>