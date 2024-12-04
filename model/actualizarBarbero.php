<?php
require('barberos.php');
$obtener = new Barberos(); /*Acceder a las acciones de la clase*/
if($_SERVER["REQUEST_METHOD"] == "GET")      
{
    $idEmpleado = $_GET['id'];
     /*Esta variable llama la tabla cliente*/
    $barbero = $obtener->obtenerBarberoPorId($idEmpleado);
    session_start();
    $_SESSION['barberoActual'] = $barbero;
    header("Location: ../view/modificar_barberos.php");
}
if($_SERVER["REQUEST_METHOD"] == "POST")      
{
    $idEmpleado = $_POST['idEmpleado'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    //$cliente = new ClienteModel($idCliente,$nombre,$apellido,null,null,null,null);
    //$actualizarCliente = $obtener->actualziarCliente($cliente);
    $actualizarBarbero = $obtener->actualziarBarbero($idEmpleado, $nombre, $apellido);
    echo $actualizarBarbero;
     /*Esta variable llama la tabla cliente*/
    /*$obtener = new Clientes(); /*Acceder a las acciones de la clase*/
    /*$cliente = $obtener->obtenerClientePorId($idCliente);
    session_start();
    $_SESSION['clienteActual'] = $cliente;
    header("Location: ../view/modificar_usuarios.php");*/
    header("Location: ./listadoBarbero.php?mensaje={$actualizarBarbero}");
}
?>