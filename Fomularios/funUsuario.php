<?php 
    include_once '../ReglasNegocio/RNUsuario.php';

    function Registrar()
    {
        if (isset($_POST)) {
            $entidad = new Usuario;
            $entidad->setUsuario($_POST['txtUsuario']);
            $entidad->setCorreo($_POST['txtCorreo']);
            $entidad->setContraseña($_POST['txtContraseña']);
            //validación de contraseñas xdxd
            $contra = ($_POST['txtContraseña']);
            $confirma = ($_POST['txtConfirmacionContraseña']);
            if ($contra === $confirma){
                $rn = new RNUsuario;
                $rn->Registrar($entidad);
                header("location: ../index.php");
            }
            // else{
            //     echo "las contraseñas no coinciden";
            // }
        }
    }

    Registrar();
?>