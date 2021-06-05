<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/estilos.css?v=<?php echo time(); ?>">
	<link rel="stylesheet" type="text/css" href="../css/responsive.css">
	<link rel="stylesheet" type="text/css" href="../iconos/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="../SassNaye/estilo-persona.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="../iconos/LSiconsStyle.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Registrar categoría</title>
</head>
<?php 
    include_once '../Entidades/Categoria.php';
    include_once '../ReglasNegocio/RNCurso.php';
    session_start();
    if (isset($_SESSION['CURSOS'])) {
        $carrito = count($_SESSION['CURSOS']);
    }else{
        $carrito = 0;
    }
?>
<body>
    <header class="barra-menu header unselectable">
		<nav>
			<input type="checkbox" id="toggle"/>
			<label class="menu-icon" for="toggle"></label>
			<ul id="listaMenu">
				<li class="titulo"><a class="opcionNav" href="../index2.php"><i class="ico-home3"></i><span> INICIO</span></a></li>
				<li class="titulo"><a class="opcionNav" href="../index2.php #nosotros"><i class="ico-user-tie"></i><span> NOSOTROS</span></a></li>
				<li class="titulo"><a class="opcionNav" href="../index2.php #cursos"><i class="ico-books"></i><span> CURSOS</span></a></li>
				<li class="titulo"><a class="opcionNav" href="../index2.php #testimonios"><i class="ico-users"></i><span> TESTIMONIOS</span></a></li>
				<li class="titulo"><a class="opcionNav" href="../index2.php #contacto"><i class="ico-hangouts"></i><span> CONTACTO</span></a></li>
                <li class="titulo"><a class="opcionNav" href="#"><i class="ico-books"></i><span> MIS CURSOS</span></a></li>
				<!-- <li class="titulo"><a class="opcionNav" href="Fomularios/frmPersona.php"><i class="ico-users"></i><span>PERFIL</span></a></li> -->
				<li class="titulo"><a class="opcionNav" href="frmSalir.php"><i  class="icon-key"></i><span> SALIR</span></a></li>		
			</ul>
		</nav>
	</header>
    <!-- <?php include_once '../PaginaBase/nav.php';?> -->
    <section class="container">
        <div class="group">
            <a href="frmCarrito.php" class="btn-link">Ver Carrito<?php echo '('.$carrito.')';?></a>
            <center><h3>Listado de cursos</h3></center>
            <?php 
            $rn = new RNCurso();
            $cursos = $rn->Listar();
            foreach ($cursos as $curso) { ?>
                <div class="curso-item">
                    <h4 class="titulo"><?php echo $curso->getNombre();?></h4>
                    <p class="descripcion"><?php echo $curso->getDescripcion();?></p>
                    <p class="precio"><?php echo $curso->getPrecio();?></p>
                    <form action="funPruebaCarrito.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $curso->getId();?>">
                        <input type="hidden" name="nombre" value="<?php echo $curso->getNombre();?>">
                        <input type="hidden" name="descripcion" value="<?php echo $curso->getDescripcion();?>">
                        <input type="hidden" name="precio" value="<?php echo $curso->getPrecio();?>">
                        <input type="submit" value="Agregar al carrito">
                    </form>
                </div>
            <?php }?>
        </form>
        </div>
    </section>
    <?php include_once '../PaginaBase/footer.php';?>
</body>
</html>

<?php
?>