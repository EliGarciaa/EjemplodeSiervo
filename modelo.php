<?php
/**
* Clase Persona
*/
class Persona
{
	public $nombre;
	function __construct($nombre)
	{
		$this->nombre = $nombre;	
	}

	public function saveDabaBase(){
		$conexion = new mysqli("localhost", "root", "Jesus8", "Personas");
		$query = "INSERT into Usuarios(nombre) values('$this->nombre');";
		$conexion->query($query);
		$conexion->close();
		echo "Guardado Exitosamente";

	}
}

?>