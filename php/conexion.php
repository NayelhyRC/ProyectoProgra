<?php
    $host = "localhost";
    $user = "root";
    $pass = "root";
    $db = "plataforma_cursos";

    $conexion = mysqli_connect($host, $user, $pass, $db);
    mysqli_set_charset($conexion, "utf8");
?>