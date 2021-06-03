<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
	<link rel="stylesheet" type="text/css" href="../css/responsive.css">
	<link rel="stylesheet" type="text/css" href="../iconos/style.css">
	<link rel="stylesheet" type="text/css" href="../iconos/LSiconsStyle.css">
    <style>
        .Target-Container{
            position: sticky;
            width: 80vw;
            height: 70vh;
            border-radius: 10px;
            margin: 50px auto 50px auto;
            display:flex;
            box-shadow: 2px 1px black;
            overflow:hidden;
        }
        .left-Target{
            width: 100%;
            background-color: #A3E4D7;
			font-size: 25px;
        }
		.left-Target input[type="text"]{
            height: 40px;
            width: 20vw;
            margin: 5px 0px 5px 40px;
			border:none;
			border-radius: 15px;
        }
		.left-Target input[type="text"]:focus{
			outline: none;
			transform: 1200ms ease;
            background-color: blue;
        }
        .rigth-Target{
            display: none;
            width: 50%;
            background-color: #A3D7;
            align-items: center;
            justify-content: center;
        }
        .target-img{
            width: 90%;
            height: 80%;
        }
    </style>
    <title>Document</title>
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
		<script>
			function ColorChange(){
				let i = document.getElementById('num');
				i.style.backgroundColor='blue';
			}
		</script>
	<section>
    <div class="Target-Container">
        <div class="left-Target">
        <form action="" method="post">
            <p>Numero Tarjeta:</p>
            <input type="text" name="Numero" id='num 'onfocus="ColorChange()"><br>
            <p>CCI:</p>
            <input type="text" name="CCI"><br>
            <p>Banco:</p>
            <div class="BankOption"><input type="radio" name="Banco"><div>
            <br>
            <br>
            <input type="submit" name="Registrer">
        </form>
        </div>
        <div class="rigth-Target">
            <img class="target-img" src="../imagenes/Tarjeta.png">
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