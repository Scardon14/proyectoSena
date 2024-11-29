<?php
include_once "conexionBD.php";
class RegistroNegocio
{

    private $conexionBD;

    function __construct()
    {
        $this->conexionBD = new conexionBD();
        $this->conexionBD = $this->conexionBD->conectarBD();
    }

    function insertarDatos($query)
    {
        $statement = $this->conexionBD->prepare($query);
        $statement->execute();
    }
    function obtenerUsuario($query) 
    {
        $statement = $this->conexionBD->prepare($query); 
        $statement->execute(); 
        $result = $statement->fetchColumn(); 
        return $result;
    }

    function obetenerBarberias() 
    {
        $query = "SELECT * FROM negocio";
        $statement = $this->conexionBD->prepare($query); 
        $statement->execute(); 
        $result = $statement->fetchAll(PDO::FETCH_ASSOC); 
        return $result;
    }
    function getConexionBD()
    {
        return $this->conexionBD;
    }
}