<?php
    include_once '../Entidades/Compra.php';
    include_once '../Entidades/Curso.php';
    include_once '../ReglasNegocio/RNCompra.php';
    session_start();

    $cursos = ObtenerCursosCarrito();

    $rn = new RNCompra();
    if (count($cursos)>0) {
        for ($i=0; $i < count($cursos); $i++) { 
            $compra = new Compra();
            $compra->setCurso($cursos[$i]->getId());
            $compra->setMonto($cursos[$i]->getPrecio());
            $compra->setCodigoOperacion('7283');
            $rn->Registrar($compra);
        }
        echo 'Cursos registrados';
        session_unset();
        session_destroy();
    }else{
        echo 'No hay cursos que registrar';
    }
    header("refresh:3;url=frmPruebaCarrito.php");

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