<?php
include_once("conexionBD.php");
class FotosTrabajo{
    private $conexionBD;
    function __construct(){
        $this->conexionBD = new conexionBD();
        $this->conexionBD = $this->conexionBD->conectarBD();
    }
    public function obtenerFotosTrabajoPorUsuario($idUsuario){
        $query ="SELECT * FROM fotografia WHERE idUsuario = '{$idUsuario}'";
        $statement = $this->conexionBD->prepare($query);
        $statement->execute();
        $result = $statement->fetch();
        return $result;
    }
}
?>