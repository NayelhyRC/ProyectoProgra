<?php 
    class Conexion
    {
        private $Conexion;
        protected function Conectar()
        {
            $host="localhost";
            $user="root";
            $pass="root";
            $db="xd";
    
            $conexion=mysqli_connect($host,$user,$pass,$db);
            $this->Conexion = $conexion;
        }

        protected function Cerrar()
        {
            mysqli_close($Conexion);
        }

        protected function EjecutarSqlEdit($sql)
        {
            $result = mysqli_query($this->Conexion,$sql);
            if($result === true){
                return $result;
            }else{
                echo 'Error al realizar la operación';
            }
        }

        protected function EjecutarSqlRead($sql)
        {
            $result = mysqli_query($this->Conexion,$sql);
            if($result !== false){
                return $result;
            }else{
                echo 'Error al realizar la operación';
            }
        }
    }
?>