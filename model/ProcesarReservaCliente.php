<?php
    include_once "RegistroNegocio.php";
    include_once "ReservaCliente.php";
    $reserva = new ReservaCliente();
    $negocio = new RegistroNegocio();
    if($_SERVER['REQUEST_METHOD'] === 'GET'){
        $idCliente = $_GET['idCliente'];
        if(isset($idCliente)){
            session_start();
            $resultado = $reserva->obenerReservas($idCliente);
            if(empty($resultado)){
                header(header: "Location: ../view/index_barbero.php?mensaje = Aún no haz programado una reserva");
            }
            $_SESSION['negocios'] = $negocio->obetenerBarberias();
            $_SESSION['reservas_cliente'] = $resultado;
            header(header: "Location: ../view/reserva_cliente.php");
        }
    }
?>