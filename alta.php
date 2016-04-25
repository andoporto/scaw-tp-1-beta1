<?php session_start();
	
	if(isset($_SESSION['usuario'])){
		require 'views/alta.view.php';
	}

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$nombrep = filter_var(strtolower($_POST['nombre_producto']), FILTER_SANITIZE_STRING);
		$precio = $_POST['precio'];

		$errores = '';

		if (empty($nombrep) or empty($precio) ) {
			$errores .= '<li>Por favor rellena los datos correctamente</li>';
		} else{
			try{
				$conexion = new PDO('mysql:host=localhost;dbname=almacentp', 'root','');
			} catch(PDOException $e){
				echo "Error: " . $e->getMessage();
			}	
		}

		if ($errores == '') {
			$statement = $conexion->prepare('INSERT INTO productos (id_producto, id_registro, nombre_producto, precio) VALUES (null, null, :nombre_producto, :precio)');
			$statement->execute(array(
					':nombre_producto' => $nombrep,
					':precio' => $precio
				));
			echo "Los datos se enviaron correctamente";


		}
	}


	

?>