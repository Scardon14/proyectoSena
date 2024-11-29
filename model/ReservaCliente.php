<?php
/*Tiene las consultas que ejecutará la BD, llama la conexion para insertar los datos en la BD*/
include_once "conexionBD.php"; /* Importa la coenxion de la BD */
class ReservaCliente
{

    private $conexionBD; /*Variable que alojara la conexion a la BD*/

    function __construct() /*Inicializa la variable conexion consumiendo la clase de conexionBD*/
    {
        $this->conexionBD = new conexionBD(); /* Crea el objeto y Llama al archivo conexionBD.php*/
        $this->conexionBD = $this->conexionBD->conectarBD(); /*Invoca la funcion de conectar la BD*/
    }

    /* function obtenerConexion()
     {
         return $this->conexionBD;
     }*/
    /*Metodo de insetar datos, $query recibe el insert desde el archivo ProcesarBarbero.php para insertar el usuario en la BD*/
    function obenerReservas($idCliente) /* funcion que devuelte el total del valor de usuarios registrados como barbero*/
    {
        $query = "SELECT r.*,e.nombres, e.apellidos from reserva r
                    INNER JOIN empleado e ON e.idEmpleado = r.idEmpleado 
                    where r.idCliente = '{$idCliente}'";
        $statement = $this->conexionBD->prepare($query); /*lo que prepara el query para ser ejecutado*/
        $statement->execute(); /*Se ejecuta la sentencia sql*/
        $result = $statement->fetchAll(PDO::FETCH_ASSOC); /*obtiene el conteo de usuarios en la tabla*/
        return $result;
    }
    function obtenerReservaPorId($idReserva)
    {
        $query = "SELECT r.* from reserva r where r.idReserva = '{$idReserva}'";
        $statement = $this->conexionBD->prepare($query); /*lo que prepara el query para ser ejecutado*/
        $statement->execute(); /*Se ejecuta la sentencia sql*/
        return $result = $statement->fetch(); /*obtiene el conteo de usuarios en la tabla*/
    }
    function actualizarReservas($idReserva, $estado) /* funcion que devuelte el total del valor de usuarios registrados como barbero*/
    {
        $query = "UPDATE reserva SET estado = '{$estado}' WHERE idReserva = '{$idReserva}'";
        $statement = $this->conexionBD->prepare($query); /*lo que prepara el query para ser ejecutado*/
        if (!empty($this->obtenerReservaPorId($idReserva))) {
            if ($statement->execute()) {
                /*$query = "DELETE FROM reserva WHERE idReserva = '{$idReserva}'";
                $statement = $this->conexionBD->prepare($query);
                $statement->execute();*/
                return ["success" => true, "message" => "Reserva actualizada correctamente"];
            }
        }
        return ["success" => false, "message" => "No se pudo actualizar la reserva"];
    }
}
