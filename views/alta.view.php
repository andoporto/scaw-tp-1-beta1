<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href='https://fonts.googleapis.com/css?family=Raleway:400,300'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<title>Contenido</title>
</head>
<body>	

	<header>
		<div class="contenedor">
			<ul>
				<li><a href="contenido.php">Inicio</a></li>
				<li><a href="alta.php">Alta</a></li>
				<li><a href="#">Baja</a></li>
				<li><a href="#">Modificación</a></li>
				<li><a href="#">Consultas</a></li>
				<li><a href="#">Productos</a></li>

			</ul>
			<p><a href="login.php">Iniciar Sesion</a></p>
		</div>
	</header>

	<div class="contenedor">
		<h1 class="titulo">Ingrese un Nuevo Producto</h1>
		<hr class="border">

		<form enctype="multipart/form-data" action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="formulario" name="alta">
			<div class="form-group">
				<input type="text" name="nombre_producto" class="nombre_producto" placeholder="Nombre del Producto: ">
			</div>

			<div class="form-group">
				<input type="text" name="precio" class="precio" placeholder="Indique un precio: ">
				<i class="submit-btn fa fa-arrow-right" onclick="alta.submit()"></i>
			</div>

			<?php if(!empty($errores)): ?>
				<div class="error">
					<ul>
						<?php echo $errores; ?>
					</ul>
				</div>
			<?php endif; ?>	
		</form>
		
	</div>
</body>
</html>