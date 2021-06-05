<?php
        include '../ReglasNegocio/RNPersona.php';

        function Registrar()
        {
            if (isset($_POST)) {
                $entidad = new Persona;
                $entidad->setNombres($_POST['txtNombres']);
                $entidad->setApellidoPaterno($_POST['txtApellidoPat']);
                $entidad->setApellidoMaterno($_POST['txtApellidoMat']);
                $entidad->setFechaNacimiento($_POST['dtpFechaNacimiento']);
                $entidad->setPais($_POST['cboPais']);
    
                $rn = new RNPersona;
                $rn->Registrar($entidad);
                header("location: ../frmPersona.php");
            }
        }
    
        Registrar();
    ?>