<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
	<link rel="stylesheet" type="text/css" href="../css/responsive.css">
	<link rel="stylesheet" type="text/css" href="../iconos/style.css">
	<link rel="stylesheet" type="text/css" href="../css/styleModal.css">
	<link rel="stylesheet" type="text/css" href="../iconos/LSiconsStyle.css">
	<link rel="stylesheet" href="../css/styleTarjeta.css">
    <title>Devzonee</title>
</head>
<body>
	<header class="barra-menu header unselectable">
		<nav>
			<input type="checkbox" id="toggle"/>
			<label class="menu-icon" for="toggle"></label>
			<ul id="listaMenu">
				<li class="titulo"><a class="opcionNav" href="#inicio"><i class="ico-home3"></i><span> INICIO</span></a></li>
				<li class="titulo"><a class="opcionNav" href="#nosotros"><i class="ico-user-tie"></i><span> NOSOTROS</span></a></li>
				<li class="titulo"><a class="opcionNav" href="#cursos"><i class="ico-books"></i><span> CURSOS</span></a></li>
				<li class="titulo"><a class="opcionNav" href="#testimonios"><i class="ico-users"></i><span> TESTIMONIOS</span></a></li>
				<li class="titulo"><a class="opcionNav" href="#contacto"><i class="ico-hangouts"></i><span> CONTACTO</span></a></li>
				<li class="titulo"><a class="opcionNav" href="#"><i  class="icon-key"></i><span> CERRAR SESION</span></a></li>			
			</ul>
		</nav>
    </header>

<section>
	<div class="Tarjeta-Contenedor">
		<div class="left">
		<form action=" method="post">
				<p>Numero Tarjeta:</p>
				<input type="text" name="Numero"><br>
				<p>CCI:</p>
				<input type="text" name="CCI"><br>
				<p>Banco:</p>
				<div class="option">
				<input type="radio" name="Banco" value="Visa" id="1"><label for="1" class="BankOption"><img src="../imagenes/Visa.png"></label>
				<input type="radio" name="Banco" value="MasterCard" id="2"><label for="2"class="BankOption"><img src="../imagenes/MasterCard.png"></label>
				<input type="radio" name="Banco" value="PayPal" id="3"><label for="3" class="BankOption"><img src="../imagenes/PayPal.png"></label>
				</div>
				<br>
				<br>
				<input type="submit" name="Registrer">
			</form>
		</div>
		<div class="rigth">
			<img src="../imagenes/Tarjeta.png" alt="">
		</div>
	</div>
</section>    


<footer class="footer">
		<div id="contacto" class="contacto">
			<div class="containter-footer-body child-container" id="footer">
				<div class="columns column1">
					<h2>Más sobre nosotros</h2>
					<p>Somos un grupo de estudiantes lanzando su primera startup.</p>
				</div>
				<div class="columns column2">
					<h2>Nuestras redes sociales</h2>
					<ul>
						<li>
							<a href="https://www.facebook.com/profile" target="_blank">
								<i class="ico-facebook2"></i> Síguenos en Facebook
							</a>
						</li>

						<li>
							<a href="https://www.facebook.com/profile" target="_blank">
								<i class="ico-twitter"></i> Síguenos en Twitter
							</a>
						</li>

						<li>
							<a href="https://www.facebook.com/profile" target="_blank">
								<i class="ico-instagram"></i> Síguenos en Instagram
							</a>
						</li>

						<li>
							<a href="https://www.facebook.com/profile" target="_blank">
								<i class="ico-youtube"></i> Síguenos en Youtube
							</a>
						</li>
					</ul>
				</div>

				<div class="columns column3">
					<h2>Contáctanos</h2>
					<ul>
						<li>
							Mail: <a href="mailto:correo@gmail.com">correo@gmail.com</a>
						</li>
					</ul>
					
				</div>
			</div>
		</div>
		<div>
			<div class="container-footer">
				<p>
					Copyright &#169; Devzonee 
					<script type='text/javascript'>
						var creditsyear = new Date();document.write(creditsyear.getFullYear());
					</script>. All rights reserved
				</p>
			</div>
		</div>
  	</footer>
</body>
</html>