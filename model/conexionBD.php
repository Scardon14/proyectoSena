<?php

class conexionBD{
    //Funcion que permite hacer la conexion a la BD
    function conectarBD(){
        //Parametros que requiere para la conexion 
        $servername = "mysql-proyecto.alwaysdata.net";
        $username = "proyecto";
        $password = "Salem202B.";
        //Permite el manejo de error que puede alujar la conexion 
        try {  /* Se hace la conexion a la BD*/
            $conn = new PDO("mysql:host=$servername;dbname=proyecto_sena", $username, $password); /* Pasa parametros para hacer la conexion a la BD*/
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); /*Se ejecuta la conexion*/
            return $conn; /*Retorna la coenxion que se acaba de crear*/
        } //Le da un control al error 
        catch (PDOException $e) {
            echo "Connection Failed: " . $e->getMessage();
        }
        return null; /*Si la conexion es fallida retorna un valor nulo*/
    }
}

?>
