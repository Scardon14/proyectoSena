<?php
require_once "Servicio.php";
$servicios = new Servicio();
    if($_SERVER['REQUEST_METHOD'] === 'GET') { 
        session_start();
        $_SESSION['servicios'] = $servicios->obtenerServicios();
        header(header: "Location: ../view/seleccionar_servicio.php");
    }
?>