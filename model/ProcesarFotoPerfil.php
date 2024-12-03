<?php
    include_once("FotoPerfil.php");
    include_once("Servicio.php");
    $foto = new FotoPerfil();
    $servicio = new Servicio();
    if($_SERVER['REQUEST_METHOD'] == 'GET') {
        $idUsuario = $_GET['idUsuario'];
        $idPerfil = $_GET['idPerfil'];
        $idNegocio = $_GET['idNegocio'];
        session_start();
        $_SESSION['foto-perfil'] =  $foto->obtenerFotoPerfilPorUsuari( $idUsuario);
        if($idPerfil == 1){
            $_SESSION['servicios'] =  $servicio->obtenerServicios($idNegocio);
            header(header: 'Location: ../view/mibarberia_negocio.php');
        }else if($idPerfil == 2){            
            header(header: 'Location: ../view/miperfil_barbero.php');
        }else if($idPerfil == 3){
            header(header: 'Location: ../view/miperfil_usuario.php');
        }
    }
?>