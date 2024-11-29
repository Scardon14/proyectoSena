<?php
    include "ReservaCliente.php";
    $reserva = new ReservaCliente();
    if($_SERVER['REQUEST_METHOD'] === 'GET'){
        echo "ENTRE";
        $idCliente = $_GET['idCliente'];
        if(isset($idCliente)){
            session_start();
            $resultado = $reserva->obenerReservas($idCliente);
            echo "ENTRE";
            if(empty($resultado)){
            header(header: "Location: ../view/index_barbero.php?mensaje = Aún no haz programado una reserva");
            }
            $_SESSION['reservas_cliente'] = $resultado;
            header(header: "Location: ../view/reserva_cliente.php");
        }
    }
?>