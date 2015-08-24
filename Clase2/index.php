<html>
<head>
	<title>Prueba objetos</title>
</head>
<body>
	<?php
		include "ClasePersona.php";

		$unaPersona = new Persona("Pepe algo",18);
		$otraPersona = new Persona("Pepito otro",35);

		$unaPersona->ToString();
		$otraPersona->ToString();
	?>

	
</body>
</html>