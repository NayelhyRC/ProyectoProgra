<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/estilos.css?v=<?php echo time(); ?>">
	<link rel="stylesheet" type="text/css" href="../css/responsive.css">
	<link rel="stylesheet" type="text/css" href="../iconos/style.css?v=<?php echo time(); ?>">
	<!-- <link rel="stylesheet" type="text/css" href="../css/styleLS.css?v=<?php echo time(); ?>"> -->
    <link rel="stylesheet" type="text/css" href="../SassNaye/estilo-persona.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="../iconos/LSiconsStyle.css">
    <title>DevZone</title>
</head>
<body>
    <header class="barra-menu header unselectable">
		<nav>
			<input type="checkbox" id="toggle"/>
			<label class="menu-icon" for="toggle"></label>
			<ul id="listaMenu">
				<li class="titulo"><a class="opcionNav" href="../index2.php"><i class="ico-home3"></i><span> INICIO</span></a></li>
				<li class="titulo"><a class="opcionNav" href="#nosotros"><i class="ico-user-tie"></i><span> NOSOTROS</span></a></li>
				<li class="titulo"><a class="opcionNav" href="#cursos"><i class="ico-books"></i><span> CURSOS</span></a></li>
				<li class="titulo"><a class="opcionNav" href="#testimonios"><i class="ico-users"></i><span> TESTIMONIOS</span></a></li>
				<li class="titulo"><a class="opcionNav" href="#contacto"><i class="ico-hangouts"></i><span> CONTACTO</span></a></li>
				<li class="titulo"><a class="opcionNav" href="#" onclick="openLoginForm()"><i  class="icon-key"></i><span> CERRAR SESIÓN</span></a></li>
			</ul>
		</nav>
	</header>
    
    <div class="container">
        <h2>Mis Cursos</h2>
        <?php   
            include_once ("../AccesoDatos/Conexion.php");

            // $solicitud  = "SELECT G.Nombre, R.duracion
            // FROM guias G
            // LEFT OUTER JOIN rutas4x4 R ON G.id_guia = R.id_guia
            // ORDER BY R.duracion ASC
            // ";
    
            // $resultado = mysqli_query($conexion, $solicitud);
    
            // echo '<h2>REPORTE 03</h2>';
            // echo 'Nombres de TODOS los guias y el tiempo que les lleva hacer sus rutas: <br><br> ';
    
            // echo "<table border='1'>";
            // echo "<tr id='cabecera'>";
            // echo "<td>Nombre de Guía</td>"; 
            // echo "<td>Duracion</td>";
            // echo "</tr>";
    
            // while( $fila = mysqli_fetch_array($resultado)){
            //     echo "<tr>";
            //     echo "<td>" . $fila['Nombre'] . "</td>";
            //     echo "<td>" . $fila['duracion'] . "</td>";
            //     echo "</tr>";
            // }
    
            // echo "</table>";
            // echo "<br><a href='frmMenuReportes.html'>Regresar</a>"
        ?>
    </div>

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