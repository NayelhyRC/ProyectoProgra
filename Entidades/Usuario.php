<?php
    class Usuario{
        private $usuario;
        private $correo;
        private $contraseña;
        private $tipo;
        private $idPersona;

        public function getUsuario(){
            return $this->usuario;
        }

        public function setUsuario($usuario){
            $this->usuario = $usuario;
        }

        public function getCorreo(){
            return $this->correo;
        }

        public function setCorreo($correo){
            $this->correo = $correo;
        }

        public function getContraseña(){
            return $this->contraseña;
        }

        public function setContraseña($contraseña){
            $this->contraseña = $contraseña;
        }

        public function getTipo(){
            return $this->tipo;
        }
    }
?>