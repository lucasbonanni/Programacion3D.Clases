<?php
abstract class Persona{
	
	private $nombreApellido;
	private $edad;
	private $idioma;

	public function __construct($nombre,$edad){
		$this->nombreApellido = $nombre;
		$this->edad = $edad;
	}

	public abstract function Hablar($idioma);

	public function ToString(){
		return $this->nombreApellido." Edad: ".$this->edad;
	}
}


?>