<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevZone</title>
</head>
<body>
    <h2>Actualizar Usuario</h2>
    <div class="container">
        <form method="POST" action="frmPersona.php">
            Nombres: <input type="text" placeholder="" name="txtNombres"><br><br>
            Apellido Paterno: <input type="text" placeholder="" name="txtApellidoPat"><br><br>
            Apellido Materno: <input type="text" placeholder="" name="txtApellidoMat"><br><br>
            Fecha de nacimiento: <input type="date" name="dtpFechaNacimiento"><br><br>
            <input class="dtpFecha" type="submit" name="btnEnviar" value="Registrar">
        </form>

        <script>
            window.onload = function(){
            var fecha = new Date(); //Fecha actual
            var mes = fecha.getMonth()+1; //obteniendo mes
            var dia = fecha.getDate(); //obteniendo dia
            var year = fecha.getFullYear(); //obteniendo año
            if(dia<10)
                dia='0'+dia; //agrega cero si el menor de 10
            if(mes<10)
                mes='0'+mes //agrega cero si el menor de 10
            document.getElementsByClassName('fechaActual').value=dia+"-"+mes+"-"+year;
            }
        </script>
    </div>

    <?php
        include '../ReglasNegocio/RNPersona.php';

        function Registrar()
        {
            if (isset($_POST['btnEnviar'])) {
                $entidad = new Persona;
                $entidad->setNombres($_POST['txtNombres']);
                $entidad->setApellidoPaterno($_POST['txtApellidoPat']);
                $entidad->setApellidoMaterno($_POST['txtApellidoMat']);
                $entidad->setFechaNacimiento($_POST['dtpFechaNacimiento']);
    
                $rn = new RNPersona;
                $rn->Registrar($entidad);
                // header("location: ../index.html");
            }
        }
    
        Registrar();
    ?>
</body>
</html>