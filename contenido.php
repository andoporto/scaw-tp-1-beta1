<?php

	//Si ponemos esto la pagina principal solo la veran aquellos usuarios registrados , sino lo saco desde aca
	session_start();

	if (isset($_SESSION['usuario'])) {
		require 'views/contenido.view.php';
	}else{
		header('Location: login.php');
	}
	
	
	//hasta aca
	//Esto lo sacamos sino ponemos lo de arriba
	//require 'views/contenido.view.php';
?>
<a href="cerrar.php">Cerrar Sesion</a>