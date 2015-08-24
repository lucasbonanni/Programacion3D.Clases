<?php 

class Persona{
	
	private $_nombreApellido;
	private $_edad;

	public function __construct( $nombreApellido , $edad){
		$this->_nombreApellido = $nombreApellido;
		$this->_edad = $edad;

	}

	public function ToString(){
		echo $this->_nombreApellido." ".$this->_edad."<br>";
	}
}


?>