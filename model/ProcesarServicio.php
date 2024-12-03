<?php
require_once "Servicio.php";
$servicios = new Servicio();
    if($_SERVER['REQUEST_METHOD'] === 'GET') { 
        $idNegocio = $_GET['idNegocio'];
        session_start();
        $_SESSION['servicios'] = $servicios->obtenerServicios($idNegocio);
        header(header: "Location: ../view/seleccionar_servicio.php");
    }
?>