<?php 
    include_once '../AccesoDatos/Conexion.php';
    include_once '../Entidades/Compra.php';

    class RNCompra extends Conexion
    {
        public function Registrar(Compra $compra)
        {
            // Valores de clase
            $curso = $compra->getCurso();
            $codigoOperacion = $compra->getCodigoOperacion();
            $monto = $compra->getMonto();
            $estado = $compra->getEstado();
            $alumno = $compra->getAlumno();
            // Fin valores
            
            $sql = "INSERT INTO compra (IdCurso,CodigoOperacion,Monto,Estado,IdAlumno) 
                    VALUES ('$curso','$codigoOperacion','$monto','1','1');";
                    // VALUES ('$curso','$codigoOperacion','$monto','$estado','$alumno');";
            $this->Conectar();
            $this->EjecutarSqlEdit($sql);
            $this->Cerrar();
        }
    }
?>