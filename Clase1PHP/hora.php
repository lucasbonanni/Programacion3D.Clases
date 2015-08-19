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
		<h1>Mañana o Tarde</h1>
	</div>
	<div class="CajaInicio animated bounceInRight"> 
		<h1>Momento del día</h1>
		<?php 

			echo "<br><br><br><h1>";
			$tipo = date("a");
			if($tipo == "am")
				if(date("H") > 7)
					echo "mañana";
				else
					echo "Madrugada";
			else
				if(date("H") < 19)
					echo "tarde";
				else
					echo "Noche";
			echo "</h1><br><br><br>"
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