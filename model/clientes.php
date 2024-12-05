<?php
require("conexionBD.php"); /*conexion de la BD */
class Clientes
{
    private $conexionBD; /*Variable que alojara la conexion a la BD*/

    function __construct() /*Inicializa la variable conexion consumiendo la clase de conexionBD*/
    {
        $this->conexionBD = new conexionBD(); /* Crea el objeto y Llama al archivo conexionBD.php*/
        $this->conexionBD = $this->conexionBD->conectarBD(); /*Invoca la funcion de conectar la BD*/
    }
    function listaCliente($query)
    {
        $statement = $this->conexionBD->prepare($query); /*lo que prepara el query para ser ejecutado*/
        $statement->execute(); /*Se ejecuta la sentencia sql*/
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);/*obtiene el conteo de usuarios en la tabla*/
        return $result;
    }
    function obtenerClientePorId($idCliente)
    {
        $query = " select * from cliente where idCliente = {$idCliente} "; 
        $statement = $this->conexionBD->prepare($query); /*lo que prepara el query para ser ejecutado*/
        $statement->execute(); /*Se ejecuta la sentencia sql*/
        $result = $statement->fetch();/*obtiene el conteo de usuarios en la tabla*/
        return $result;
    }
    function actualziarCliente($idCliente, $nombre, $apellido, $numeroCelular){//ClienteModel $cliente){
        //$query = " UPDATE cliente SET nombres = '{$cliente->getNombres()}', apellidos = '{$cliente->getApellidos()}' where idCliente = {$cliente->getIdCliente()}"; 
        $query = " UPDATE cliente SET nombres = '{$nombre}', apellidos = '{$apellido}', numeroCelular = '{$numeroCelular}' where idCliente = {$idCliente}"; 
        $statement = $this->conexionBD->prepare($query); /*lo que prepara el query para ser ejecutado*/
         /*Se ejecuta la sentencia sql*/
        if($statement->execute()){
            return "Actualizacion exitosa";
        }
        return "Actualizacion fallida";
    }
    function eliminarCliente($idCliente){//ClienteModel $cliente){
        //$query = " UPDATE cliente SET nombres = '{$cliente->getNombres()}', apellidos = '{$cliente->getApellidos()}' where idCliente = {$cliente->getIdCliente()}"; 
        $query = " UPDATE cliente SET estado = '2' where idCliente = {$idCliente}"; 
        $statement = $this->conexionBD->prepare($query); /*lo que prepara el query para ser ejecutado*/
         /*Se ejecuta la sentencia sql*/
        if($statement->execute()){
            return "Eliminacion exitosa";
        }
        return "Eliminacion fallida";
    }
   
}


?>