<?php
    class Persona{
        private $nombres;
        private $apellidoPaterno;
        private $apellidoMaterno;
        private $fechaNacimiento;
        private $pais;

        /**
         * Get the value of apellidoMaterno
         */ 
        public function getApellidoMaterno()
        {
                return $this->apellidoMaterno;
        }

        /**
         * Set the value of apellidoMaterno
         *
         * @return  self
         */ 
        public function setApellidoMaterno($apellidoMaterno)
        {
                $this->apellidoMaterno = $apellidoMaterno;

                return $this;
        }

        /**
         * Get the value of nombres
         */ 
        public function getNombres()
        {
                return $this->nombres;
        }

        /**
         * Set the value of nombres
         *
         * @return  self
         */ 
        public function setNombres($nombres)
        {
                $this->nombres = $nombres;

                return $this;
        }

        /**
         * Get the value of apellidoPaterno
         */ 
        public function getApellidoPaterno()
        {
                return $this->apellidoPaterno;
        }

        /**
         * Set the value of apellidoPaterno
         *
         * @return  self
         */ 
        public function setApellidoPaterno($apellidoPaterno)
        {
                $this->apellidoPaterno = $apellidoPaterno;

                return $this;
        }

        /**
         * Get the value of fechaNacimiento
         */ 
        public function getFechaNacimiento()
        {
                return $this->fechaNacimiento;
        }

        /**
         * Set the value of fechaNacimiento
         *
         * @return  self
         */ 
        public function setFechaNacimiento($fechaNacimiento)
        {
                $this->fechaNacimiento = $fechaNacimiento;

                return $this;
        }

        /**
         * Get the value of pais
         */ 
        public function getPais()
        {
                return $this->pais;
        }

        /**
         * Set the value of pais
         *
         * @return  self
         */ 
        public function setPais($pais)
        {
                $this->pais = $pais;

                return $this;
        }
    }
?>
