<?php

    include("conexion.php");

    $correo = $_POST['txtCorreo'];
    $usuario = $_POST['txtUsuario'];
    $contra = $_POST['txtContraseña'];
    $confContra = $_POST['txtConfirmacionContraseña'];

    if(strlen($correo) > 0){
        $solicitud = "INSERT INTO Usuario(Usuario, Contraseña, Tipo, Correo) 
                VALUES('$usuario', '$contra', 'D','$correo')";

        $resultado = mysqli_query($conexion, $solicitud);
        echo "Se registró correctamente<br>";
    }
    else{
        echo "falta";
    }
    
    // echo "<a href='*/frmUsuario.html'>Regresar</a>"
?>