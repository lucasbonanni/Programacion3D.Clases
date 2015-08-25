<html>
<head>
	<title>Prueba objetos</title>
</head>
<body>
	<?php
		//include "ClasePersona.php";
		include "ClaseEmpleado.php";
		include "fabrica.php";

		/*$unaPersona = new Persona("Pepe algo",18);
		$otraPersona = new Persona("Pepito otro",35); 

		$unaPersona->ToString();
		$otraPersona->ToString(); */


		$unEmpleado = new Empleado("pepe",22,1324);
		Empleado::CalcularSueldoNeto($unEmpleado);
		$unEmpleado->ToString();
		echo "<br>";
		$otroEmpleado = new Empleado("pepito",44,432,23424);
		Empleado::CalcularSueldoNeto($otroEmpleado);
		$otroEmpleado->ToString();

		$unaFabrica = new fabrica("La pepona");
		array_push($unaFabrica->Empleados, $unEmpleado,$otroEmpleado);
		$unaFabrica->ToString();

	?>

	
</body>
</html>