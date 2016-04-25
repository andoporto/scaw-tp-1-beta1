<?php

	//Definimos las variables que se van a enviar mediante el post	
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		
		$nombrep = filter_var(strtolower($_POST['nombre_producto']), FILTER_SANITIZE_STRING);
		$errores = '';
		
		//Si el los campos con empty estan vacios se ejecuta el error
		if (empty($nombrep) ) {
			$errores .= '<li>Por favor rellena los datos correctamente</li>';
		} else{
			//con el try,catch unimos la base de datos
			try{
				$conexion = new PDO('mysql:host=localhost;dbname=almacentp', 'root','');
			} catch(PDOException $e){
				echo "Error: " . $e->getMessage();
			}	
		}
		//si no hay errores entonces borra datos 
		if ($errores == '') {
			$statement = $conexion->prepare('DELETE FROM producto WHERE nombre_producto = :nombre_producto');
			$statement->execute(array(
					':nombre_producto' => $nombrep
				));
			$errores .= '<li>Los datos se borraron correctamente</li>';
			
		}
	}
	require 'views/baja.view.php';
?>