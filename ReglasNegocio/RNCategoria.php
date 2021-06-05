<?php 
    include_once '../AccesoDatos/Conexion.php';
    include_once '../Entidades/Categoria.php';

    class RNCategoria extends Conexion
    {
        public function Registrar(Categoria $categoria)
        {
            // Valores de clase
            $descripcion = $categoria->getDescripcion();
            $estado = $categoria->getEstado();
            // Fin valores
            
            $sql = "INSERT INTO categoria (Descripcion,Estado) VALUES ('$descripcion', '$estado');";
            $this->Conectar();
            $this->EjecutarSqlEdit($sql);
            $this->Cerrar();
        }
    }
?>