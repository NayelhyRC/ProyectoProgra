<?php
    // include_once '../ReglasNegocio/RNUsuario.php';
    include_once '../AccesoDatos/Conexion.php';

    if (isset($_POST)) {
        $entidad = new Usuario;
        $entidad->setCorreo($_POST['txtCorreo']);
        $entidad->setContraseña($_POST['txtContraseña']);

        // $rn = new RNUsuario;
        $rn = ValidarLogin($entidad);
        header("location: ../index.php");
    }
    include_once '../AccesoDatos/Conexion.php';
    function ValidarLogin(Usuario $usuario){
        $contra = $usuario->getContraseña();
        $correo = $usuario->getCorreo();

        $solicitud = "SELECT U.Id 
                FROM Usuario U
                WHERE U.Correo = '$correo' AND U.Contraseña = '$contra'";

        
        $resultado = mysqli_query($Conexion, $solicitud);
        return $resultado;
    }
?>