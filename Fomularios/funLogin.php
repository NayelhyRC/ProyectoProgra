<?php
    include_once '../ReglasNegocio/RNUsuario.php';
    // include_once '../AccesoDatos/Conexion.php';

    if (isset($_POST)) {
        $entidad = new Usuario;
        $entidad->setCorreo($_POST['user']);
        $entidad->setContraseña($_POST['pass']);

        $rn = new RNUsuario;
        $resultado = $rn->ValidarLogin($entidad);

        $fila = mysqli_fetch_array($resultado);
        if(isset($fila[0])){
            session_start();
            $_SESSION['Id'] = $fila[0];
            $_SESSION['Usuario'] = $fila[1];
            $_SESSION['IdPer'] = $fila[2];
            header("location: ../index2.php");
        }else{
            header("location:../Login-Singup/Login.php");
        }
    }
    
?>