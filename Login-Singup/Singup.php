<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="styleLS2.css?v=<?php echo time(); ?>">
	<!-- <link rel="stylesheet" type="text/css" href="../css/estilos.css?v=<?php echo time(); ?>"> -->
	<link rel="stylesheet" type="text/css" href="../css/responsive.css">
    <title>DevZone</title>
</head>
<body>
	<img src="../imagenes/libros_mesa.jpg" alt="">
	<div class="fond">
		<div class="contenedor-Singup">
			<div class="namePage">
				<h1><strong>DEVZONE</strong></h1>
			</div>

			<form class="registrar" method="POST" action="../Fomularios/funUsuario.php">
				<div class="datos">
					<!-- <input type="radio" id="estudiante" name="rbtnTipo" value="E"> 
					<label for="estudiante">Estudiante</label>
					<input type="radio" id="docente" name="rbtnTipo" value="D"> 
					<label for="docente">Docente</label><br> -->
					<input type="text" placeholder="Usuario" required name="txtUsuario"><br><br>
					<hr>
					<input type="email" placeholder="Ejemplo@mail.com" required name="txtCorreo"><br><br>
					<hr>
					<input type="password" placeholder="Contraseña" required name="txtContraseña"><br><br>
					<hr>
					<input type="password" placeholder="Confirmar contraseña" required name="txtConfirmacionContraseña">
					<br><br><hr >
				</div>

				<div class="opc">
					<input type="submit" name="Singup" value="REGISTRARSE">
				</div>
				<p>
					¿Ya tienes una cuenta?
					<a href="../Login-Singup/Login.php">
						<center>Inicia Sesión</center>
					</a>
				</p>
			</form>
		</div>
		
		<br>
	<a href="/index.php" id="back">Volver</a>
	</div>
</body>
</html>