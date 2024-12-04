<?php
require('negocio.php');
$obtener = new Negocios(); /*Acceder a las acciones de la clase*/
if($_SERVER["REQUEST_METHOD"] == "GET")      
{
    $idNegocio = $_GET['id'];
     /*Esta variable llama la tabla cliente*/
    $negocio = $obtener->obtenerNegocioPorId($idNegocio);
    session_start();
    $_SESSION['negocioActual'] = $negocio;
    header("Location: ../view/modificar_negocios.php");
}
if($_SERVER["REQUEST_METHOD"] == "POST")      
{
    $idNegocio = $_POST['idNegocio'];
    $nombreNegocio = $_POST['nombreNegocio'];
    $apellido = $_POST['apellido'];
    //$negocio = new NegocioModel($idNegocio,$nombre,$apellido,null,null,null,null);
    //$actualizarNegocio = $obtener->actualziarNegocio($negocio);
    $actualizarNegocio = $obtener->actualziarNegocio($idNegocio, $nombreNegocio, $apellido);
    echo $actualizarNegocio;
     /*Esta variable llama la tabla negocio*/
    /*$obtener = new Negocios(); /*Acceder a las acciones de la clase*/
    /*$negocio = $obtener->obtenerClientePorId($idNegocio);
    session_start();
    $_SESSION['negocioActual'] = $negocio;
    header("Location: ../view/modificar_negocios.php");*/
    header("Location: ./listadoNegocio.php?mensaje={$actualizarNegocio}");
}
?>