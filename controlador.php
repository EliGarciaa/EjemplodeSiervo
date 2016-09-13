<?php

	include 'modelo.php'
	
	if (isset($_GET["nombre"])) {
		$usuario = new Persona($_GET["nombre"]);
		$usuario->saveDabaBase();
	}
?>