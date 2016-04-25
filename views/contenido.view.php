<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<title>Contenido</title>
</head>
<body>

	<header>
		<div class="contenedor">
			<div class="header izquierda">
				<p><a href="#">Inicio</a></p>
			</div>
			<div class="menu">
				<nav class="opciones">
					<ul>
						<li><a href="contenido.php">Alta <i class="fa fa-user"></i></a></li>
						<li><a href="baja.php">Baja <i class="fa fa-user"></i></a></li>
						<li><a href="modificar.php">Modificacion <i class="fa fa-user"></i></a></li>
						<li><a href="#">Consulta </a></li>
						<li><a href="#">Productos Propios <i class="fa fa-user"></i></a></li>
						<li><a href="#">Iniciar Sesion <i class="fa fa-user"></i></a></li>
					</ul>
				</nav>
			</div>	
		</div>
	</header>
	<!--Inicia Formulario-->
	<div class="contenedor">
		<h1 class="titulo">Ingrese un Nuevo Producto</h1>
		<hr class="border">
		<form  action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="formulario" name="alta">
			<div class="form-group">
				<input type="text" name="id_producto" class="id_producto" placeholder="ID del Producto: ">
			</div>

			<div class="form-group">
				<input type="text" name="nombre_producto" class="nombre_producto" placeholder="Nombre del Producto: ">
			</div>

			<div class="form-group">
				<input type="text" name="precio" class="precio" placeholder="Indique un precio: ">
			</div>
			<!--En esta parte se ejecuta el error que saldra en el contenido.php-->
			<?php if(!empty($errores)): ?>
				<div class="error">
					<ul>
						<?php echo $errores; ?>
					</ul>
				</div>
			<?php endif; ?>	
			<i class="submit-btn fa fa-arrow-right" onclick="alta.submit()"></i>
		</form>
	</div>

</body>
</html>