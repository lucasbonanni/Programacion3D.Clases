<html>
<head>
	<title>Suma</title>
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
	<div class="Page-header">
		<h1>Suma</h1>
	</div>
	<div class="CajaInicio animated bounceInRight"> 
		<?php
		echo "<h1> Primera Suma </h1>";
		$num1 =32;
		$num2 =12;
		$resultado = $num1 + $num2;
			echo "$resultado"."\t Resultado con comillas<br>";
			echo $resultado."\t Resultado sin comillas<br>";
			echo '$resultado'."\t Resultado entre comillas simples <br>";
		?>
		<br>
		<br>
		<a href="index.html" class="list-group-item  list-group-item list-group-item-info">
			<h4 class="list-group-item-heading">Volver a Inicio</h4>
		</a>
	</div>
	
</div>


</body>
</html>