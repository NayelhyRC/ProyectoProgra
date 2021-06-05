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
    
            $solicitud = "SELECT U.Id 
                    FROM Usuario U
                    WHERE U.Correo = '$correo' AND U.Contraseña = '$contra'";
    
            $resultado = mysqli_query($Conexion, $solicitud);
            return $resultado;
        }

    }
?>
