<?php 
    include '.../Entidades/Tarjeta.php';
    include '../AccesoDatos/Conexion.php';

    class RNTarjeta extends Conexion{

        public function Registrar(Tarjeta $Tarjeta){
            $insert = "INSERT INTO Tarjeta(NumeroTarjeta,CCI,Banco,Id_Persona) 
            VALUES ('$Tarjeta->getNumeroTarjeta()','$Tarjeta->getCCI()','$Tarjeta->getBanco()','$Tarjeta->getIdPersona()')";
            $this->Conectar();
            $this->EjecutarSqlEdit($insert);
            $this->Cerrar();
        }

        public function Modificar(Tarjeta $Tarjeta){
            $update = "UPDATE Tarjeta
            SET NumeroTarjeta='$Tarjeta->getNumeroTarjeta()',CCI='$Tarjeta->getCCI()',Banco='$Tarjeta->getBanco()'
            WHERE Id_Persona = $Tarjeta->getIdPersona()";
            $this->Conectar();
            $this->EjecutarSqlEdit($update);
            $this->Cerrar();
        }

        public function Eliminar(Tarjeta $Tarjeta){
            $delete = "DELETE FROM Tarjeta WHERE $Tarjeta->getIdPersona()";
        }
    }

?>