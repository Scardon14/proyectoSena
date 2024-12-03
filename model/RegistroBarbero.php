<?php
/*Tiene las consultas que ejecutará la BD, llama la conexion para insertar los datos en la BD*/
require("conexionBD.php"); /* Importa la coenxion de la BD */
class RegistroBarbero
{

    private $conexionBD; /*Variable que alojara la conexion a la BD*/

    function __construct() /*Inicializa la variable conexion consumiendo la clase de conexionBD*/
    {
        $this->conexionBD = new conexionBD(); /* Crea el objeto y Llama al archivo conexionBD.php*/
        $this->conexionBD = $this->conexionBD->conectarBD(); /*Invoca la funcion de conectar la BD*/
    }

    /*Metodo de insetar datos, $query recibe el insert desde el archivo ProcesarBarbero.php para insertar el usuario en la BD*/
    function insertarDatos($query)
    {
        $statement = $this->conexionBD->prepare($query); /*prepara el $query para ser ejecutado*/
        $result = $statement->execute(); /*Hace el insert en la BD si todo esta bien*/
    }
    function obtenerUsuario($query) /* funcion que devuelte el total del valor de usuarios registrados como barbero*/
    {
        $statement = $this->conexionBD->prepare($query); /*lo que prepara el query para ser ejecutado*/
        $statement->execute(); /*Se ejecuta la sentencia sql*/
        $result = $statement->fetchColumn(); /*obtiene el conteo de usuarios en la tabla*/
        return $result;
    }
    function obtenerBarberosPorNegocio($idNegocio) /* funcion que devuelte el total del valor de usuarios registrados como barbero*/
    {
        $query = "SELECT e.*, fp.fotoPerfil_Logo FROM empleado e 
        INNER JOIN usuario u ON u.idUsuario = e.idUsuario 
        INNER JOIN foto_perfil fp ON u.idUsuario = fp.idUsuario
        WHERE e.idNegocio = '{$idNegocio}' and u.idPerfil = 2
        ";
        $statement = $this->conexionBD->prepare($query); /*lo que prepara el query para ser ejecutado*/
        $statement->execute(); /*Se ejecuta la sentencia sql*/
        $result = $statement->fetchAll(PDO::FETCH_ASSOC); /*obtiene el conteo de usuarios en la tabla*/
        return $result;
    }
}
