<?php
	include "ClasePersonaAbstracta.php";	
	/**
	* 
	*/
	class Empleado extends Persona
	{
		private $legajo;
		private $sueldoBruto;
		private $sueldoNeto;
		
		public function __construct($nombre,$edad, $legajo, $sueldoBruto = null)
		{
			parent::__construct($nombre,$edad);
			$this->legajo = $legajo;
			$this->sueldoBruto = $sueldoBruto;
		}


		public function ToString(){
			echo parent::ToString();
			echo "<br><br> legajo: ".$this->legajo." sueldo Bruto:".$this->sueldoBruto." sueldo Neto: ".$this->sueldoNeto."<br>";
		}

		public static function CalcularSueldoNeto($Empleado){
			$Empleado->sueldoNeto = $Empleado->sueldoBruto * 0.8;
		}

		public function Hablar($idioma){
			$this->idioma = $idioma;
		}
	}
?>