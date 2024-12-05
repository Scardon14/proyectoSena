<?php
require('negocio.php');
$obtener = new Negocios(); /*Acceder a las acciones de la clase*/
if($_SERVER["REQUEST_METHOD"] == "POST")      
{
    $idNegocio = $_POST['idNegocio'];
    //$cliente = new ClienteModel($idCliente,$nombre,$apellido,null,null,null,null);
    //$actualizarCliente = $obtener->actualziarCliente($cliente);
    $actualizarNegocio = $obtener->eliminarNegocio($idNegocio);
    echo $actualizarNegocio;
     /*Esta variable llama la tabla negocio*/
    /*$obtener = new Negocios(); /*Acceder a las acciones de la clase*/
    /*$negocio = $obtener->obtenerNegocioPorId($idNegocio);
    session_start();
    $_SESSION['negocioActual'] = $negocio;
    header("Location: ../view/modificar_negocios.php");*/
    header("Location: ./listadoNegocio.php?mensaje={$actualizarNegocio}");
}
?>