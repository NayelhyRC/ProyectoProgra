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
            $pais = $per->getPais();
            $idU = $_SESSION['Id'];
            $sql = "INSERT INTO persona(Nombres,ApellidoPaterno, ApellidoMaterno, FechaNacimiento,Tipo, Estado,Pais) 
            VALUES ('$nom','$apPat','$apMat','$fechaNac', 'E',1,'$pais')";

            $sql2 = "UPDATE Usuario 
                    SET IdPersona = (SELECT MAX(id) as last_id FROM persona)
                    WHERE Id = $idU";

            $this->Conectar();
            $this->EjecutarSqlEdit($sql);
            $this->EjecutarSqlEdit($sql2);
            $this->Cerrar();
        }
    }
?>