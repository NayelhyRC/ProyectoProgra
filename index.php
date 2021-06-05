<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/estilos.css?v=<?php echo time(); ?>">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<link rel="stylesheet" type="text/css" href="iconos/style.css">
	<link rel="stylesheet" type="text/css" href="iconos/LSiconsStyle.css">

	<title>DevZone</title>
</head>
<body>
	<section id="inicio">
		<div class="contenedor-home">
			<div class="contenedor-inicio">
				<div class="contenedor-titulo">
					<p class="titulo nombre"><strong>DEVZONE</strong></p>
					<p class="titulo subtitulo">La educación es más accesible que nunca</p>
					<a class="titulo boton" href="#nosotros">Empezar<br></a>
				</div>
	
			<!--SLIDER INICIO-->
				<div class="contenedor">
					<div class="slider-contenedor">
						<section class="contenido-slider">
							<img src="imagenes/fondo_principal.jpg" alt="" class="">
						</section>
						<section class="contenido-slider">
							<img src="imagenes/codigo_colores.jpg" alt="" class="">
						</section>
						<section class="contenido-slider">
							<img src="imagenes/boy-table.jpg" alt="" class="">
						</section>
						<section class="contenido-slider">
							<img src="imagenes/integrales.jpg" alt="" class="">
						</section>
						<section class="contenido-slider">
							<img src="imagenes/mapa_pines.jpg" alt="" class="">
						</section>
						<section class="contenido-slider">
							<img src="imagenes/tubos_ensayo.jpg" alt="" class="">
						</section>
						<section class="contenido-slider">
							<img src="imagenes/fondo_principal.jpg" alt="" class="">
						</section>
					</div>
					<script src="js/sliderInicio.js"></script>
				</div>		
			</div>
		</div>
	</section>
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
				<li class="titulo"><a class="opcionNav" href="Login-Singup/Login.php"><i  class="icon-key"></i><span> INCIAR SESIÓN</span></a></li>			
				<li class="titulo"><a class="opcionNav" href="Login-Singup/Singup.php"><i class="icon-sign-in"></i><span > REGISTRARSE</span></a></li>
			</ul>
		</nav>
	</header>

	<main class="main" id="main">
<!-- <section>Sobre Nosotros</section> -->
		<section id="nosotros" class="child-container">
			<br><br>
				<h2><center>Nosotros</center></h2>
				<div class="container-nosotros">
					<div class="container-somos">
						<h3>¿Quiénes somos?</h3>
						<p>
							DevZone es una plataforma de capacitación virtual, compromtetida a 
							brindar educación de de alta calidad y romper las barreras geográficas 
							del aprendizaje y adquisición de conocimientos.
						</p>
					</div>
	
					<div class="img-somos">
						<img src="imagenes/libro_resaltadores.jpg" loading="lazy">
					</div>
	
					<div class="img-somos">
						<img src="imagenes/robot.jpg" loading="lazy">
					</div>
	
					<div class="container-elegirnos">
						<h3>¿Por qué elegirnos?</h3>
							<div class="elegirnos-grid">
								<div>
									<li>Tenemos gran variedad de cursos y profesores, seleccionados 
										rigurosamente.</li>
								</div>
								<div>
									<li>Ofrecemos diplomas de certificación físicos de las Escuelas 
											aprobadas.</li>
								</div>
								<div>
									<li>Transformamos la manera de enseñar.</li>
								</div>
								<div>
									<li>Te ayudamos a expandir tus oportunidades laborales.</li>
								</div>
								</ul>
							</div>
					</div>
				</div>
				<div class="divBoton">
					<button><a href="nosotros.html">Leer más</a></button>
				</div>
			</section>
		<!-- <section>Algunos de nuestros cursos</section> -->
		
		<section id="cursos" class="child-container">
				<br>
				<iframe src="Slider/prueba.html" style="border-style: none;width: 100%; height: 350px;" scrolling="no"></iframe>
				<div class="divBoton">
					<br>
					<button><a href="cursos.html">Ver más</a></button>
				</div>
				<script src="js/carousel.js"></script>
		</section>
		<!-- <section>Categorias populares</section> -->
		<section id="categorias" class="categorias child-container unselectable">
			<h2><center>Categorías populares</center></h2>
			<div class="cards-categorias">
				<a class="categoria">
					<i class="ico-lifebuoy"></i>
					<h3 class="title-card">Desarrollo web</h3>
					<p class="text-card">35 cursos</p>
				</a>
				<div class="categoria">
					<i class="ico-books"></i>
					<h3 class="title-card">Diseño gráfico</h3>
					<p class="text-card">20 cursos</p>
				</div>
				<div class="categoria">
					<i class="ico-coin-pound"></i>
					<h3 class="title-card">Economía</h3>
					<p class="text-card">25 cursos</p>
				</div>
				<div class="categoria">
					<i class="ico-camera"></i>
					<h3 class="title-card">Fotografía</h3>
					<p class="text-card">13 cursos</p>
				</div>
			</div>
			<div class="divBoton">
				<button><a href="cursos.html">Ver más</a></button>
			</div>
		</section>
		<!-- <section>Testimonios</section> -->
		<section id="testimonios">
			<br>
			<h2><center> Nuestros estudiantes dicen ...</center></h2>
			<iframe src="sliderCursos/slider.html"
			style="border-style: none;width: 100%; height: 600px;"></iframe>
			<br>
		</section>
	</main>

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