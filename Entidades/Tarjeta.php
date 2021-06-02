<?php 
    class Tarjeta
    {
        private $NumeroTarjeta;
        private $CCI;
        private $Banco;
        private $Id_Persona;

        public function __construct($NumTar,$nCCI,$bank,$IDP)
        {
            $this->NumeroTarjeta = $NumTar;
            $this->CCI = $nCCI;
            $this->Banco = $bank;
            $this->Id_Persona = $IDP;
        }
        public function getNumeroTarjeta(){
            return $this->NumeroTarjeta;
        }
		public function setNumeroTarjeta($NumeroTarjeta)
		{
			    $this->NumeroTarjeta= $NumeroTarjeta;
		}
        public function getCCI(){
            return $this->CCI;
        }
		public function setCCI($CCI)
		{
			    $this->CCI= $CCI;
		}
        public function getBanco(){
            return $this->Banco;
        }
		public function setBanco($Banco)
		{
			    $this->Banco= $Banco;
		}
        public function getIdPersona(){
            return $this->Id_Persona;
        }
		public function setIdPersona($Id_Persona)
		{
			    $this->Id_Persona= $Id_Persona;
		}
    }
?>