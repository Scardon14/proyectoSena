<?php
require("conexionBD.php");
class RegistroNegocio
{

    private $conexionBD;

    function __construct()
    {
        $this->conexionBD = new conexionBD();
        $this->conexionBD = $this->conexionBD->conectarBD();
    }

    function obtenerConexion()
    {
        return $this->conexionBD;
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
    function getConexionBD()
    {
        return $this->conexionBD;
    }
}