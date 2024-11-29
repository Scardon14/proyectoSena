<?php
    include_once "RegistroBarbero.php";
    $barbero = new RegistroBarbero();
    if($_SERVER['REQUEST_METHOD'] === 'GET'){
        $idNegocio = $_GET['idNegocio'];
        $idCliente = $_GET['idCliente'];
        if(isset($idNegocio)){
            session_start();
            $resultado = $barbero->obtenerBarberosPorNegocio($idNegocio);
            print_r($resultado);
            if(empty($resultado)){
                header(header: "Location: ./ProcesarReservaCliente.php?idCliente=<?= $idCliente");
            }
            $_SESSION['barberos'] = $resultado;
            $barberos = $_SESSION['barberos'];
            foreach ($barberos as $barbero) {
                echo ($barbero['nombres']. $barbero['idNegocio']);
            }
            header(header: "Location: ../view/MiPersonal_negocio.php");
        }
    }
?>