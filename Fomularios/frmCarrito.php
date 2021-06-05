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
            <center><h3>Carrito</h3></center>
            <?php 
            $cursos = ObtenerCursosCarrito();
            foreach ($cursos as $curso) { ?>
                <div class="curso-item">
                    <h4 class="titulo"><?php echo $curso->getNombre();?></h4>
                    <p class="descripcion"><?php echo $curso->getDescripcion();?></p>
                    <p class="precio"><?php echo $curso->getPrecio();?></p>
                </div>
            <?php }?>
            <a href="frmPagoCursos.php" class="btn-link">Pagar cursos</a>
        </form>
        </div>
    </section>
    <?php include_once '../PaginaBase/footer.php';?>
</body>
</html>

<?php
    function ObtenerCursosCarrito()
    {
        $list = array();
        if (isset($_SESSION['CURSOS'])) {
            for ($i=0; $i < count($_SESSION['CURSOS']); $i++) { 
                $list[$i] = $_SESSION['CURSOS'][$i];
            }
            return $list;
        }else{
            echo '<h4>Sin elementos en la lista</h4>';
            return $list;
        }
    }
?>