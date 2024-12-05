<?php
require('clientes.php');
/*require('ClienteModel');*/
$obtener = new Clientes(); /*Acceder a las acciones de la clase*/
if($_SERVER["REQUEST_METHOD"] == "GET")      
{
    $idCliente = $_GET['id'];
     /*Esta variable llama la tabla cliente*/
    $cliente = $obtener->obtenerClientePorId($idCliente);
    session_start();
    $_SESSION['clienteActual'] = $cliente;
    header("Location: ../view/modificar_usuarios.php");
}
if($_SERVER["REQUEST_METHOD"] == "POST")      
{
    $idCliente = $_POST['idCliente'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $numeroCelular = $_POST['numeroCelular'];
    //$cliente = new ClienteModel($idCliente,$nombre,$apellido,null,null,null,null);
    //$actualizarCliente = $obtener->actualziarCliente($cliente);
    $actualizarCliente = $obtener->actualziarCliente($idCliente, $nombre, $apellido, $numeroCelular);
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