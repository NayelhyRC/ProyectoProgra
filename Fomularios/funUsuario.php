<?php 
    include '../ReglasNegocio/RNUsuario.php';

    function Registrar()
    {
        if (isset($_POST)) {
            $entidad = new Usuario;
            $entidad->setUsuario($_POST['txtUsuario']);
            $entidad->setCorreo($_POST['txtCorreo']);
            $entidad->setContraseña($_POST['txtContraseña']);

            $rn = new RNUsuario;
            $rn->Registrar($entidad);
            header("location: ../index.html");
        }
    }

    Registrar();
?>