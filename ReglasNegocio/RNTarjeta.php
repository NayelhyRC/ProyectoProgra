<?php 
    include '../Entidades/Tarjeta.php';
    include '../AccesoDatos/Conexion.php';

    class RNTarjeta extends Conexion{

        public function Registrar(Tarjeta $Tarjeta){
            $numero=$Tarjeta->getNumeroTarjeta();
            $cci = $Tarjeta->getCCI();
            $banc = $Tarjeta->getBanco();
            $id = $Tarjeta->getIdPersona();
            $insert = "INSERT INTO Tarjeta(NumeroTarjeta,CCI,Banco,Id_Persona) 
            VALUES ('$numero','$cci','$banc','$id')";
            $this->Conectar();
            $this->EjecutarSqlEdit($insert);
            $this->Cerrar();
        }

        public function Modificar(Tarjeta $Tarjeta){
            $numero=$Tarjeta->getNumeroTarjeta();
            $cci = $Tarjeta->getCCI();
            $banc = $Tarjeta->getBanco();
            $id = $Tarjeta->getIdPersona();
            $update = "UPDATE Tarjeta
            SET NumeroTarjeta='$numero',CCI='$cci',Banco='$banc'
            WHERE Id_Persona = $id";
            $this->Conectar();
            $this->EjecutarSqlEdit($update);
            $this->Cerrar();
        }

        public function Eliminar(Tarjeta $Tarjeta){
            $id = $Tarjeta->getIdPersona();
            $delete = "DELETE FROM Tarjeta WHERE $id";
        }
    }

?>