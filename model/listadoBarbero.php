<?php
require('barberos.php');
if($_SERVER["REQUEST_METHOD"] == "GET")      
{
    $query = " select * from empleado where estado = '1'";     /*Esta variable llama la tabla barbero*/
    $obtener = new Barberos(); /*Acceder a las acciones de la clase*/
    $listabarberos = $obtener->listaBarbero($query);
    session_start();
    $_SESSION['listaBarberos'] = $listabarberos;
    header("Location: ../view/listaBarberos.php");
}
?>