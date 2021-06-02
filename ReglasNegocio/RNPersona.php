<?php 
    include '../AccesoDatos/Conexion.php';
    include '../Entidades/Persona.php';

    class RNPersona extends Conexion
    {
        public function Registrar(Persona $per)
        {
            $nom = $per->getNombres();
            $apPat = $per->getApellidoPaterno();
            $apMat = $per->getApellidoMaterno();
            $fechaNac = $per->getFechaNacimiento();
            $sql = "INSERT INTO persona(Nombres,ApellidoPaterno, ApellidoMaterno, FechaNacimiento) 
            VALUES ('$nom','$apPat','$apMat','$fechaNac')";
            $this->Conectar();
            $this->EjecutarSqlEdit($sql);
            $this->Cerrar();
        }
    }
?>