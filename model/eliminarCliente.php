<?php
require('clientes.php');
require('ClienteModel');
$obtener = new Clientes(); /*Acceder a las acciones de la clase*/
if($_SERVER["REQUEST_METHOD"] == "POST")      
{
    $idCliente = $_POST['idCliente'];
    //$cliente = new ClienteModel($idCliente,$nombre,$apellido,null,null,null,null);
    //$actualizarCliente = $obtener->actualziarCliente($cliente);
    $actualizarCliente = $obtener->eliminarCliente($idCliente);
    echo $actualizarCliente;
     /*Esta variable llama la tabla cliente*/
    /*$obtener = new Clientes(); /*Acceder a las acciones de la clase*/
    /*$cliente = $obtener->obtenerClientePorId($idCliente);
    session_start();
    $_SESSION['clienteActual'] = $cliente;
    header("Location: ../view/modificar_usuarios.php");*/
    header("Location: ./listadoClientes.php?mensaje={$actualizarCliente}");
}
?>