<?php
include_once("conexionBD.php");
class RegistroFotosTrabajo{
    private $conexion;
    function __construct(){
        $this->conexion = new conexionBD();
        $this->conexion= $this->conexion->conectarBD();
    }
    function insertarFotosTrabajo($query){
        try{
            $statement= $this->conexion->prepare($query);
            $result=$statement->execute();
            return "Registro exitoso: " . $query;
        }catch(PDOException $e){
            return "Registro fallido: " . $query . " exeption: " .$e->getMessage();
        }
    }
    public function obtenerFotosTrabajoPorUsuario($idUsuario){
        $query ="SELECT * FROM fotografia WHERE idUsuario = '{$idUsuario}'";
        $statement = $this->conexion->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}
?>