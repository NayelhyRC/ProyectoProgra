<?php 
    // include '../Entidades/Categoria.php';
    include '../ReglasNegocio/RNCategoria.php';
    function Registrar()
    {
        if (isset($_POST)) {
            $entidad = new Categoria;
            $entidad->setDescripcion($_POST['descripcion']);
            $entidad->setEstado($_POST['estado']);

            $rn = new RNCategoria;
            $rn->Registrar($entidad);
        }
    }
?>