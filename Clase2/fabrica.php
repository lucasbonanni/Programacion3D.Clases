<?php
class fabrica{
	
	private $RazonSocial;
	public $Empleados = array();


	public function __construct($RazonSocial){
		$this->RazonSocial = $RazonSocial;
	}

	public function ToString(){
		echo "<br><br> Razon Social: $this->RazonSocial";
		foreach ($this->Empleados as $item) {
			$item->ToString();
		}
	}
}


?>