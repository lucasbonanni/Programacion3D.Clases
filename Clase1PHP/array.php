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
		<h1>Array de colores</h1>
		<?php
			$colores = array("#A12B2B", "#31A12B", "#D7DF39","#3941DF" );


		foreach($colores as &$valor){
			echo "<p style="."background-color:$valor"."> Texto de colores </p>";
		}
		
		?>


		<a href="index.html" class="list-group-item  list-group-item list-group-item-info">
			<h4 class="list-group-item-heading">Volver a Inicio</h4>
		</a>
	</div>
	
</div>


</body>
</html>