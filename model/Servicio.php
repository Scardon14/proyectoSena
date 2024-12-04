<?php
/*Tiene las consultas que ejecutará la BD, llama la conexion para insertar los datos en la BD*/
include_once "conexionBD.php"; /* Importa la coenxion de la BD */
class Servicio
{

    private $conexionBD; /*Variable que alojara la conexion a la BD*/

    function __construct() /*Inicializa la variable conexion consumiendo la clase de conexionBD*/
    {
        $this->conexionBD = new conexionBD(); /* Crea el objeto y Llama al archivo conexionBD.php*/
        $this->conexionBD = $this->conexionBD->conectarBD(); /*Invoca la funcion de conectar la BD*/
    }

    /*Metodo de insetar datos, $query recibe el insert desde el archivo ProcesarBarbero.php para insertar el usuario en la BD*/
    function obtenerServicios($idNegocio) /* funcion que devuelte el total del valor de usuarios registrados como barbero*/
    {
        $query = "SELECT * FROM servicio where estado = 1 and idNegocio= {$idNegocio}";
        $statement = $this->conexionBD->prepare($query); /*lo que prepara el query para ser ejecutado*/
        $statement->execute(); /*Se ejecuta la sentencia sql*/
        $result = $statement->fetchAll(PDO::FETCH_ASSOC); /*obtiene el conteo de usuarios en la tabla*/
        return $result;
    }
    function actualizarServicio($idServicio,$servicio, $descripcion, $duracion, $precio){
        $query = "UPDATE servicio set nombre='{$servicio}', detalle = '{$descripcion}',duracion='{$duracion}',precio='{$precio}' where idServicio = '{$idServicio}' ";
        $statement = $this->conexionBD->prepare($query);
        if($statement->execute()){
            return ["success" => true, "message" => "Servicio actualizada correctamente"];
        }
        return ["success" => false, "message" => "No se ha podido actualizar el servicio"];

    }
    function crearServicio($servicio,$detalle,$duracion,$precio,$idNegocio){
        $query = "INSERT INTO servicio(nombre, detalle, precio, estado, duracion, idNegocio) values ('{$servicio}','{$detalle}','{$precio}','1','{$duracion}','{$idNegocio}')";
        $statement = $this->conexionBD->prepare($query);
        $statement->execute();
    }
    function eliminarServicio($idServicio){
        $query = "DELETE FROM servicio WHERE idServicio = '{$idServicio}'";
        $statement = $this->conexionBD->prepare($query);
        $statement->execute();
        if($statement->rowCount() > 0){            
            return ["success" => true, "message" => "Servicio eliminado correctamente"];
        }
        return ["success" => false, "message" => "No se ha podido eliminar el servicio"];
    }
}
