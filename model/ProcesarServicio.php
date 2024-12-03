<?php
require_once "Servicio.php";
$servicios = new Servicio();
    if($_SERVER['REQUEST_METHOD'] === 'GET') { 
        $idNegocio = $_GET['idNegocio'];
        session_start();
        $_SESSION['servicios'] = $servicios->obtenerServicios($idNegocio);
        header(header: "Location: ../view/seleccionar_servicio.php");
    }
    if($_SERVER['REQUEST_METHOD'] === 'PUT'){
        $data = json_decode(file_get_contents(filename: 'php://input'), true);
        $idServicio = $data['idServicio'];
        $servicio = $data['servicio'];
        $descripcion = $data['descripcion'];
        $duracion = $data['duracion'];
        $precio = $data['precio'];
        echo json_encode($servicios->actualizarServicio($idServicio,$servicio,$descripcion,$duracion,$precio));
    }
    if($_SERVER['REQUEST_METHOD'] === 'DELETE') {
        $data = json_decode(file_get_contents(filename: 'php://input'), true);
        echo json_encode($servicios->eliminarServicio($idServicio));
    }
?>