<?php 
    class Compra
    {
        private $Curso;
        private $CodigoOperacion;
        private $Monto;
        private $Estado;
        private $Alumno;

        public function getCurso()
        {
            return $this->Curso;
        }

        public function setCurso($Curso)
        {
            $this->Curso = $Curso;
        }

        public function getCodigoOperacion()
        {
            return $this->CodigoOperacion;
        }

        public function setCodigoOperacion($CodigoOperacion)
        {
            $this->CodigoOperacion = $CodigoOperacion;
        }

        public function getMonto()
        {
            return $this->Monto;
        }

        public function setMonto($Monto)
        {
            $this->Monto = $Monto;
        }

        public function getEstado()
        {
            return $this->Estado;
        }

        public function setEstado($Estado)
        {
            $this->Estado = $Estado;
        }

        public function getAlumno()
        {
            return $this->Alumno;
        }

        public function setAlumno($Alumno)
        {
            $this->Alumno = $Alumno;
        }
    }
?>