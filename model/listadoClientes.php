<?php
require('clientes.php');
if($_SERVER["REQUEST_METHOD"] == "GET")      
{
    $query = " select * from cliente ";     /*Esta variable llama la tabla cliente*/
    $obtener = new Clientes(); /*Acceder a las acciones de la clase*/
    $listaclientes = $obtener->listaCliente($query);
    session_start();
    $_SESSION['listaClientes'] = $listaclientes;
    header("Location: ../view/administrador2.php");
}
?>