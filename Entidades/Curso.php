<?php 
    class Curso
    {
        private $Nombre;
        private $Descripcion;
        private $Precio;
        private $Idioma;
        private $Duracion;
        private $Estado;

        public function getNombre()
        {
            return $this->Nombre;
        }

        public function setNombre($Nombre)
        {
            $this->Nombre = $Nombre;
        }

        public function getDescripcion()
        {
            return $this->Descripcion;
        }

        public function setDescripcion($Descripcion)
        {
            $this->Descripcion = $Descripcion;
        }

        public function getPrecio()
        {
            return $this->Precio;
        }

        public function setPrecio($Precio)
        {
            $this->Precio = $Precio;
        }

        public function getIdioma()
        {
            return $this->Idioma;
        }

        public function setIdioma($Idioma)
        {
            $this->Idioma = $Idioma;
        }

        public function getDuracion()
        {
            return $this->Duracion;
        }

        public function setDuracion($Duracion)
        {
            $this->Duracion = $Duracion;
        }

        public function getEstado()
        {
            return $this->Estado;
        }

        public function setEstado($Estado)
        {
            $this->Estado = $Estado;
        }
    }
?>