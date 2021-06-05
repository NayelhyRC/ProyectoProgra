<?php 
    include_once '../Entidades/Categoria.php';
    include_once '../ReglasNegocio/RNCategoria.php';

    Registrar();
    function Registrar()
    {
        if (isset($_POST)) {
            $entidad = new Categoria;
            $entidad->setDescripcion($_POST['descripcion']);
            if (isset($_POST['estado'])) {
                $entidad->setEstado(1);
            }else{
                $entidad->setEstado(0);
            }

            $rn = new RNCategoria;
            $rn->Registrar($entidad);
            header("refresh:1;url=frmCategoria.php?register=yes");
        }
    }
    // ActualizarUsuario.php?id=1234
    // $id=$_GET['id'];
?>