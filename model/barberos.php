<?php
require("conexionBD.php"); /*conexion de la BD */
class Barberos
{
    private $conexionBD; /*Variable que alojara la conexion a la BD*/

    function __construct() /*Inicializa la variable conexion consumiendo la clase de conexionBD*/
    {
        $this->conexionBD = new conexionBD(); /* Crea el objeto y Llama al archivo conexionBD.php*/
        $this->conexionBD = $this->conexionBD->conectarBD(); /*Invoca la funcion de conectar la BD*/
    }
    function listaBarbero($query)
    {
        $statement = $this->conexionBD->prepare($query); /*lo que prepara el query para ser ejecutado*/
        $statement->execute(); /*Se ejecuta la sentencia sql*/
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);/*obtiene el conteo de usuarios en la tabla*/
        return $result;
    }
    function obtenerBarberoPorId($idEmpleado)
    {
        $query = " select * from empleado where idEmpleado = {$idEmpleado} "; 
        $statement = $this->conexionBD->prepare($query); /*lo que prepara el query para ser ejecutado*/
        $statement->execute(); /*Se ejecuta la sentencia sql*/
        $result = $statement->fetch();/*obtiene el conteo de usuarios en la tabla*/
        return $result;
    }
    function actualziarBarbero($idEmpleado, $nombre, $apellido){//ClienteModel $cliente){
        //$query = " UPDATE empleado SET nombres = '{$cliente->getNombres()}', apellidos = '{$cliente->getApellidos()}' where idCliente = {$cliente->getIdCliente()}"; 
        $query = " UPDATE empleado SET nombres = '{$nombre}', apellidos = '{$apellido}' WHERE idEmpleado = {$idEmpleado}"; ; 
        $statement = $this->conexionBD->prepare($query); /*lo que prepara el query para ser ejecutado*/
         /*Se ejecuta la sentencia sql*/
        if($statement->execute()){
            return "Actualizacion exitosa";
        }
        return "Actualizacion fallida";
    }
    function eliminarBarbero($idEmpleado){//ClienteModel $cliente){
        //$query = " UPDATE cliente SET nombres = '{$cliente->getNombres()}', apellidos = '{$cliente->getApellidos()}' where idCliente = {$cliente->getIdCliente()}"; 
        $query = " UPDATE empleado SET estado = '2' where idEmpleado = {$idEmpleado}"; 
        $statement = $this->conexionBD->prepare($query); /*lo que prepara el query para ser ejecutado*/
         /*Se ejecuta la sentencia sql*/
        if($statement->execute()){
            return "Eliminacion exitosa";
        }
        return "Eliminacion fallida";
    }
}


?>