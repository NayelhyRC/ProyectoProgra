<?php
	include "../ReglasNegocio/RNTarjeta.php";

        function Registrar()
        {
            if (isset($_POST['Registrer'])) {
                $trj = new Tarjeta;
				$id =2 ;
				$numer=$_POST['Numero1'].$_POST['Numero2'].$_POST['Numero3'].$_POST['Numero4'];
				$trj->setNumeroTarjeta($numer);
				$trj->setCCI($_POST['CCI']);
				$trj->setBanco($_POST['Banco']);
				$trj->setIdPersona($id);
                $rn = new RNTarjeta;
                $rn->Registrar($trj);
            header("location:../Fomularios/frmTarjeta.php");
            }
        }
		
	Registrar();
?>