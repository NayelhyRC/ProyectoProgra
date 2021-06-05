<?php 
    include_once '../AccesoDatos/Conexion.php';
    include_once '../Entidades/Usuario.php';

    class RNUsuario extends Conexion
    {
        public function Registrar(Usuario $usuario)
        {
            $user = $usuario->getUsuario();
            $contra = $usuario->getContraseña();
            $correo = $usuario->getCorreo();

            $sql = "INSERT INTO Usuario(Usuario, Contraseña, Tipo, Correo) 
                    VALUES ('$user','$contra', 'E','$correo')";

            $this->Conectar();
            $this->EjecutarSqlEdit($sql);
            $this->Cerrar();
        }

        public function ValidarLogin(Usuario $usuario){
            $contra = $usuario->getContraseña();
            $correo = $usuario->getCorreo();
    
            $solicitud = "SELECT U.Id, U.Usuario, P.Id 
                    FROM Usuario U
                    JOIN Persona P ON U.IdPersona = P.Id
                    WHERE U.Correo = '$correo' AND U.Contraseña = '$contra'";
    
            $this->Conectar();
            $resultado = $this->EjecutarSqlRead($solicitud);

            return $resultado;
        }

    }
?>
