<?php 
    include '../AccesoDatos/Conexion.php';
    include '../Entidades/Persona.php';

    class RNPersona extends Conexion
    {
        public function Registrar(Persona $per)
        {
            $nom = $per->getNombres();
            $apPat = $per->getApellidoPaterno();
            $apMat = $per->getApellidoPaterno();
            $sql = "INSERT INTO persona(Nombres,ApellidoPaterno, ApellidoMaterno, FechaNacimiento) 
            VALUES ('$per->getDescripcion()',$per->getEstado())";
            $this->Conectar();
            $this->EjecutarSqlEdit($sql);
            $this->Cerrar();
        }
    }
?>