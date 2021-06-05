<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../iconos/style.css">
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
    <?php include_once '../PaginaBase/nav.php';?>
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