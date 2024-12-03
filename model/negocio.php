<?php
require("conexionBD.php"); /*conexion de la BD */
class Negocios
{
    private $conexionBD; /*Variable que alojara la conexion a la BD*/

    function __construct() /*Inicializa la variable conexion consumiendo la clase de conexionBD*/
    {
        $this->conexionBD = new conexionBD(); /* Crea el objeto y Llama al archivo conexionBD.php*/
        $this->conexionBD = $this->conexionBD->conectarBD(); /*Invoca la funcion de conectar la BD*/
    }
    function listaNegocio($query)
    {
        $statement = $this->conexionBD->prepare($query); /*lo que prepara el query para ser ejecutado*/
        $statement->execute(); /*Se ejecuta la sentencia sql*/
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);/*obtiene el conteo de usuarios en la tabla*/
        return $result;
    }
   
    function obtenerNegocioPorId($idNegocio)
    {
        $query = " select * from negocio where idNegocio = {$idNegocio} "; 
        $statement = $this->conexionBD->prepare($query); /*lo que prepara el query para ser ejecutado*/
        $statement->execute(); /*Se ejecuta la sentencia sql*/
        $result = $statement->fetch();/*obtiene el conteo de usuarios negocio en la tabla*/
        return $result;
    }
    function actualziarNegocio($idNegocio, $nombreNegocio, $apellido){//ClienteModel $cliente){
        //$query = " UPDATE negocio SET nombres = '{$negocio->getNombres()}', apellidos = '{$negocio->getApellidos()}' where idNegocio = {$negocio->getIdNegocio()}"; 
        $query = " UPDATE negocio SET nombreNegocio = '{$nombreNegocio}', apellidos = '{$apellido}' where idNegocio = {$idNegocio}" ; 
        $statement = $this->conexionBD->prepare($query); /*lo que prepara el query para ser ejecutado*/
         /*Se ejecuta la sentencia sql*/
        if($statement->execute()){
            return "Actualizacion exitosa";
        }
        return "Actualizacion fallida";
    }
    function eliminarNegocio($idNegocio){//NegocioModel $negocio){
        //$query = " UPDATE negocio SET nombres = '{$negocio->getNombres()}', apellidos = '{$negocio->getApellidos()}' where idNegocio = {$negocio->getIdNegocio()}"; 
        $query = " UPDATE negocio SET estado = '2' where idNegocio = {$idNegocio}"; 
        $statement = $this->conexionBD->prepare($query); /*lo que prepara el query para ser ejecutado*/
         /*Se ejecuta la sentencia sql*/
        if($statement->execute()){
            return "Eliminacion exitosa";
        }
        return "Eliminacion fallida";
    }
}


?>