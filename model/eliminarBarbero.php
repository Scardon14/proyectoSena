<?php
require('barberos.php');
$obtener = new Barberos(); /*Acceder a las acciones de la clase*/
if($_SERVER["REQUEST_METHOD"] == "POST")      
{
    $idEmpleado = $_POST['idEmpleado'];
    //$cliente = new ClienteModel($idCliente,$nombre,$apellido,null,null,null,null);
    //$actualizarCliente = $obtener->actualziarCliente($cliente);
    $actualizarBarbero = $obtener->eliminarBarbero($idEmpleado);
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