<?php 
    include_once '../AccesoDatos/Conexion.php';
    include_once '../Entidades/Curso.php';

    class RNCurso extends Conexion
    {
        public function Registrar(Curso $curso)
        {
            // Valores de clase
            $nombre = $curso->getNombre();
            $descripcion = $curso->getDescripcion();
            $precio = $curso->getPrecio();
            $idioma = $curso->getIdioma();
            $categoria = $curso->getCategoria();
            $estado = $curso->getEstado();
            // Fin valores
            
            $sql = "INSERT INTO curso (Nombre,Descripcion,Precio,Idioma,IdCategoria,Estado) 
                    VALUES ('$nombre','$descripcion','$precio','$idioma','$categoria','$estado');";
            $this->Conectar();
            $this->EjecutarSqlEdit($sql);
            $this->Cerrar();
        }

        public function Listar()
        {
            $sql = "SELECT * FROM curso";
            $this->Conectar();
            $resultado = $this->EjecutarSqlRead($sql);	
            $cursos = array();
            while($fila=mysqli_fetch_array($resultado)){
                $entidad = new Curso();
                $entidad->setId($fila['Id']);
                $entidad->setNombre($fila['Nombre']);
                $entidad->setDescripcion($fila['Descripcion']);
                $entidad->setPrecio($fila['Precio']);
                $cursos[] = $entidad;
            }
            $this->Cerrar();
            return $cursos;
        }
    }
?>