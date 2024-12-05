<?php
    include_once "RegistroBarbero.php";
    $barbero = new RegistroBarbero();
    if($_SERVER['REQUEST_METHOD'] === 'GET'){
        $idNegocio = $_GET['idNegocio'];
        $idCliente = $_GET['idCliente'];
        if(isset($idNegocio)){
            session_start();
            $resultado = $barbero->obtenerBarberosPorNegocio($idNegocio);
            if(empty($resultado)){
                header(header: "Location: ./ProcesarReservaCliente.php?idCliente=<?= $idCliente");
            }
            $_SESSION['idServicio'] = $_GET['idServicio'];
            $_SESSION['duracion'] = $_GET['duracion'];
            $_SESSION['barberos'] = $resultado;
            header(header: "Location: ../view/MiPersonal_negocio.php");
        }
    }
?>