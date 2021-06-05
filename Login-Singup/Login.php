<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="styleLS2.css?v=<?php echo time(); ?>">
	<link rel="stylesheet" type="text/css" href="../css/responsive.css">
    <title>DevZone</title>
</head>
<body>
	<img src="../imagenes/libros_mesa.jpg" alt="">
	<div class="fond" > 
		<div class="contenedor-Login">
			<div class="namePage"><h1><strong>DEVZONE</strong></h1></div>
			<form class="registrar" method="POST" action="../Fomularios/funLogin.php">
				<div class="datosL">
					<input type="text" placeholder="Correo" name="user" required><br><br>
					<hr>
					<input type="password" placeholder="Contraseña" name="pass" required ><br><br>
					<hr>
				</div>
				
				<div class="opc">
					<input type="submit" name="Login" value="INICIAR" />
				</div>
				<p>
					¿Aún no creas tu cuenta?
					<a href="../Login-Singup/Singup.php">
						<center>REGÍSTRATE</center>
					</a>
				</p>
			</form>	
		</div>
		<br>
	<a href="../index.php" id="back">Volver</a>
	</div>
</body>
</html>