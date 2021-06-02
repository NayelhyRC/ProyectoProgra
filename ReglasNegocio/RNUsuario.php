<?php 
    include '../AccesoDatos/Conexion.php';
    include '../Entidades/Usuario.php';

    class RNUsuario extends Conexion
    {
        public function Registrar(Usuario $usuario)
        {
            $sql = "INSERT INTO Usuario(Usuario, Contraseña, Tipo, Correo) 
                    VALUES ('$usuario->getUsuario()','$usuario->getContraseña()', 'A','$usuario->getCorreo()')";

            $this->Conectar();
            $this->EjecutarSqlEdit($sql);
            $this->Cerrar();
            
            // header("location: ../index.html");
        }
    }
?>
