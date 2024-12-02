<?php
include_once("ReservaCliente.php");
$eliminarReserva = new ReservaCliente();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $idReserva = $_POST['idReserva'];
    $idCliente = $_POST['idCliente'];
    $eliminarReserva ->eliminarReserva( $idReserva );
    header('Location: ./ProcesarReservaCliente.php?idCliente='.urlencode($idCliente));
}
?>