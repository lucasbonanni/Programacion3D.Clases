<html>
<head>
	<title>Fechas</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<div class="container">
	<div class="page-header">
		<h1>Fechas</h1>
	</div>
	<div class="CajaInicio animated bounceInRight">
		<?php
		echo "<h1>Mostrar Fechas </h1>";
		echo 'date_default_timezone_set('.'America/Argentina/Buenos_Aires'.')   se setea la timezone <br><br>';
		date_default_timezone_set('America/Argentina/Buenos_Aires');
		echo date("d")."  ---------------> 'd' Día del mes, 2 dígitos con ceros iniciales"."<br><br>";
		echo date("l")."  ---------------> 'l' Una representación textual completa del día de la semana"."<br><br>";
		echo date("D")."  ---------------> 'D' Una representación textual de un día, tres letras"."<br><br>";
		echo date("j")."   ---------------> 'j' Día del mes sin ceros iniciales"."<br><br>";
		echo date("c")."   ---------------> 'c' Fecha ISO 8601 (añadido en PHP 5)"."<br><br>";
		echo date("r")."   ---------------> 'r' Fecha con formato » RFC 2822"."<br><br>";
		echo date("U")."   ---------------> 'r' Segundos desde la Época Unix (1 de Enero del 1970 00:00:00 GMT)"."<br><br>";
		echo date('l jS \of F Y h:i:s A')." ---------------> parametros ' l jS \of F Y h:i:s A ' ";
		?>
		<br>
		<br>
		<br>
		<a href="index.html" class="list-group-item  list-group-item list-group-item-info">
			<h4 class="list-group-item-heading">Volver a Inicio</h4>
		</a>
	</div>

</div>
</body>
</html>