<?php 
    include_once '../Entidades/Curso.php';
    session_start();

    if (isset($_POST)) {
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $precio = $_POST['precio'];

        $entidad = new Curso();
        $entidad->setId($id);
        $entidad->setNombre($nombre);
        $entidad->setDescripcion($descripcion);
        $entidad->setPrecio($precio);
        
        if (!isset($_SESSION['CURSOS'])) {
            $_SESSION['CURSOS'][0] = $entidad;
        }else{
            if ( ExisteEnCarrito($entidad) == false ) {
                $numeroFilas = count($_SESSION['CURSOS']);
                $_SESSION['CURSOS'][$numeroFilas] = $entidad;
            }
        }
        header("refresh:1;url=frmPruebaCarrito.php");
    }

    function ExisteEnCarrito($entidad)
    {
        for ($i=0; $i < count($_SESSION['CURSOS']); $i++) { 
            if ($_SESSION['CURSOS'][$i]->getId() == $entidad->getId()) {
                return true;
            }
        }
        return false;
    }
?>