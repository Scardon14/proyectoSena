<?php
require('negocio.php');
if($_SERVER["REQUEST_METHOD"] == "GET")      
{
    $query = " select * from negocio ";     /*Esta variable llama la tabla cliente*/
    $obtener = new Negocios(); /*Acceder a las acciones de la clase*/
    $listanegocios = $obtener->listaNegocio($query);
    session_start();
    $_SESSION['listaNegocios'] = $listanegocios;
    header("Location: ../view/listaNegocio.php");
}
?>