<?php 
    include_once '../ReglasNegocio/RNUsuario.php';

    function Registrar()
    {
        if (isset($_POST)) {
            $entidad = new Usuario;
            $entidad->setUsuario($_POST['txtUsuario']);
            $entidad->setCorreo($_POST['txtCorreo']);
            $entidad->setContraseña($_POST['txtContraseña']);
            // $contra = ($_POST['txtContraseña']);
            // $confirma= ($_POST['txtConfirmacionContraseña']);
            // if ($contra === $confirma){
                
            // }
            // $entidad->setTipo($_POST['rbtnTipo']);

            $rn = new RNUsuario;
            $rn->Registrar($entidad);
            header("location: ../index.php");
        }
    }

    Registrar();
?>