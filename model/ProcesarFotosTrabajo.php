<?php
include_once("FotosTrabajo");
$fotosTrabajo = new FotosTrabajo();
if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $idUsuario = $_GET['idUsuario'];
    $idPerfil = $_GET['idPerfil'];
    session_start();
    $_SESSION['fotos-trabajo']= $fotosTrabajo->obtenerFotosTrabajoPorUsuario($idUsuario);
    if($idPerfil == 1){
        header(header: 'Location: ../view/mibarberia_negocio.php');
    }else if($idPerfil == 2){            
        header(header: 'Location: ../view/miperfil_barbero.php');
    }
}
?>