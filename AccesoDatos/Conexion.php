<?php 
    class Conexion
    {
        private $Conexion;
        
        protected function Conectar()
        {
            $host="localhost";
            $user="root";
            $pass='';
            // $db="xd";
            $db = "basedatosprogramacion";
    
            $conexion=mysqli_connect($host,$user,$pass,$db);
            mysqli_set_charset($conexion, "utf8");
            $this->Conexion = $conexion;
        }

        protected function Cerrar()
        {
            mysqli_close($this->Conexion);
        }

        protected function EjecutarSqlEdit($sql)
        {
            $result = mysqli_query($this->Conexion,$sql);
            if($result === true){
                return $result;
            }else{
                echo 'Error al realizar la operación de escritura';
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