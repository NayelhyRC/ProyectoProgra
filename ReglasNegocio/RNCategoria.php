<?php 
    include '../AccesoDatos/Conexion.php';
    include '../Entidades/Categoria.php';

    class RNCategoria extends Conexion
    {
        public function Registrar(Categoria $categoria)
        {
            $sql = "INSERT INTO categoria(Descripcion,Estado) VALUES ('$categoria->getDescripcion()',$categoria->getEstado())";
            $this->Conectar();
            $this->EjecutarSqlEdit($sql);
            $this->Cerrar();
        }
    }
?>