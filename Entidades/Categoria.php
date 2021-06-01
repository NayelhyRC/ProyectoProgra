<?php 
    class Categoria
    {
        private $Descripcion;
        private $Estado;

		public function getDescripcion()
		{
			return $this->Descripcion;
		}

		public function setDescripcion($Descripcion)
		{
			$this->Descripcion = $Descripcion;
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