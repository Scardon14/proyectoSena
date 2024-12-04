<?php
require("registroFotos.php");
include_once("RegistroFotosTrabajo.php");
class ProcesarFotos
{
    function guardarFotoPerfil($fotoPerfil, $obtenerUsuario)
    {
        $registroFotos = new RegistroFotos();
        $directorio = '../imagenes/' . $obtenerUsuario . "/";
        $rutaFoto = $directorio . basename($fotoPerfil['name']);
        // Verificar si el directorio existe, si no, crearlo
        if (!file_exists($directorio)) {
            mkdir($directorio, 0777, true);
        }
        if (move_uploaded_file($fotoPerfil['tmp_name'], $rutaFoto)) {
            $query = "insert into foto_perfil (idUsuario,fotoPerfil_Logo,fechaCreacion) values ('{$obtenerUsuario}', '{$rutaFoto}',now())";
            return $registroFotos->insertarFotoPerfil($query);
        }
    }
    function guardarFotosTrabajo($fotoTrabajo1, $fotoTrabajo2, $fotoTrabajo3, $fotoTrabajo4, $fotoTrabajo5, $obtenerUsuario)
    {
        $registroFotos = new RegistroFotosTrabajo();
        $directorio = '../imagenes-trabajo/' . $obtenerUsuario . "/";
        $rutaFoto1 = $directorio . basename($fotoTrabajo1['name']);
        $rutaFoto2 = $directorio . basename($fotoTrabajo2['name']);
        $rutaFoto3 = $directorio . basename($fotoTrabajo3['name']);
        $rutaFoto4 = $directorio . basename($fotoTrabajo4['name']);
        $rutaFoto5 = $directorio . basename($fotoTrabajo5['name']);
        if (!file_exists($directorio)) {
            mkdir($directorio, 0777, true);
        }
        if (
            move_uploaded_file($fotoTrabajo1['tmp_name'], $rutaFoto1) &&
            move_uploaded_file($fotoTrabajo2['tmp_name'], $rutaFoto2) &&
            move_uploaded_file($fotoTrabajo3['tmp_name'], $rutaFoto3) &&
            move_uploaded_file($fotoTrabajo4['tmp_name'], $rutaFoto4) &&
            move_uploaded_file($fotoTrabajo5['tmp_name'], $rutaFoto5)
        ) {
            $query = "INSERT INTO fotografia (idUsuario, foto1, foto2, foto3, foto4, foto5, fechaCreacion) values ('{$obtenerUsuario}', 
            '{$rutaFoto1}','{$rutaFoto2}', '{$rutaFoto3}','{$rutaFoto4}','{$rutaFoto5}', now())";
            return $registroFotos->insertarFotosTrabajo($query);
        }
    }
}
?>