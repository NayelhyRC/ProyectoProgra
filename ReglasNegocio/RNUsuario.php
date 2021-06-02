<?php 
    include '../AccesoDatos/Conexion.php';
    include '../Entidades/Usuario.php';

    class RNUsuario extends Conexion
    {
        public function Registrar(Usuario $usuario)
        {
            $user = $usuario->getUsuario();
            $contra = $usuario->getContraseña();
            $correo = $usuario->getCorreo();

            $sql = "INSERT INTO Usuario(Usuario, Contraseña, Tipo, Correo) 
                    VALUES ('$user','$contra', 'A','$correo')";
            $this->Conectar();
            $this->EjecutarSqlEdit($sql);
            $this->Cerrar();
        }
    }
?>
