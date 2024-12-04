<?php
/*Tiene las consultas que ejecutará la BD, llama la conexion para insertar los datos en la BD*/
require("conexionBD.php"); /* Importa la coenxion de la BD */
class Login
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
    function login($correo, $clave) /* funcion que devuelte el total del valor de usuarios registrados como barbero*/
    {
        // Usar un marcador de posición para prevenir inyección SQL
        $query = "SELECT * FROM usuario WHERE correoElectronico = :correo AND contraseña = :clave AND estado = :estado ";
        $statement = $this->conexionBD->prepare($query); // Preparar la consulta

        // Vincular parámetros
        $statement->bindParam(':correo', $correo);
        $statement->bindParam(':clave', $clave);
        $statement->bindValue(':estado', '1');

        $statement->execute(); // Ejecutar la consulta
        // Obtener el resultado como un arreglo asociativo
        $result = $statement->fetch();
        if($this->esEmpleado($result['idPerfil'])){
            $query = "SELECT u.contraseña ,u.idPerfil, e.* FROM usuario u INNER JOIN empleado e ON u.idUsuario = e.idUsuario where u.idUsuario = '{$result['idUsuario']}'";
            //$query = "SELECT * FROM empleado WHERE idUsuario = '{$result['idUsuario']}'";
            return $this->ejecutarConsulta($query);
        }else{
            echo $this->esEmpleado($result['idPerfil']);
            $query = "SELECT u.contraseña, u.idPerfil, c.* FROM usuario u INNER JOIN cliente c ON u.idUsuario = c.idUsuario where u.idUsuario = '{$result['idUsuario']}'";
            //$query = "SELECT * FROM cliente WHERE idUsuario = '{$result['idUsuario']}'";
            return $this->ejecutarConsulta($query);
        }
    }

    private function esEmpleado($rol){
        return $rol != 3; 
    }

    private function ejecutarConsulta($query){
        $statement = $this->conexionBD->prepare($query); // Preparar la consulta
        $statement->execute(); // Ejecutar la consulta
        $result = $statement->fetch();
        return $result;
    }
}
?>