<?php
include_once("conexionBD.php");
class RegistroFotos{
    private $conexion;
    function __construct(){
        $this->conexion=new conexionBD();
        $this->conexion= $this->conexion->conectarBD();
    }
    function insertarFotoPerfil($query){
        try{
            $statement= $this->conexion->prepare($query);
            $result= $statement->execute();
            if($result){
                return "Registro exitoso: " . $query;
            }
            return "Registro exitoso: " . $query;
        }catch(PDOException  $e){
            return "Registro fallido: ". $query ." exeption: " .$e->getMessage();
        }
    }
}
?>