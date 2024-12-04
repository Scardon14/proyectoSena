<?php
    include_once("FotoPerfil.php");
    include_once("Servicio.php");
    include_once("RegistroFotosTrabajo.php");
    $foto = new FotoPerfil();
    $servicio = new Servicio();
    $fotosTrabajo = new RegistroFotosTrabajo();
    if($_SERVER['REQUEST_METHOD'] == 'GET') {
        $idUsuario = $_GET['idUsuario'];
        $idPerfil = $_GET['idPerfil'];
        $idNegocio = $_GET['idNegocio'];
        session_start();
        $_SESSION['foto-perfil'] =  $foto->obtenerFotoPerfilPorUsuari( $idUsuario);
        if($idPerfil == 1){
            $_SESSION['servicios'] =  $servicio->obtenerServicios($idNegocio);
            $_SESSION['fotos-trabajo'] = $fotosTrabajo->obtenerFotosTrabajoPorUsuario($idUsuario);
            header(header: 'Location: ../view/mibarberia_negocio.php');
        }else if($idPerfil == 2){            
            $_SESSION['fotos-trabajo'] = $fotosTrabajo->obtenerFotosTrabajoPorUsuario($idUsuario);
            header(header: 'Location: ../view/miperfil_barbero.php');
        }else if($idPerfil == 3){
            header(header: 'Location: ../view/miperfil_usuario.php');
        }
    }
?>