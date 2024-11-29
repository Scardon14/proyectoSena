<?php
require("registroFotos.php");
class ProcesarFotos{
    function guardarFotoPerfil($fotoPerfil, $obtenerUsuario){
        $registroFotos = new RegistroFotos();
        $directorio = 'C:/xampp/htdocs/proyectoSena/imagenes/' .$obtenerUsuario."/";
        $rutaFoto = $directorio.basename($fotoPerfil['name']);
        // Verificar si el directorio existe, si no, crearlo
        if (!file_exists($directorio)) {
            mkdir($directorio, 0777, true);
        }
        if (move_uploaded_file($fotoPerfil['tmp_name'], $rutaFoto)){
            $query = "insert into foto_perfil (idUsuario,fotoPerfil_Logo,fechaCreacion) values ('{$obtenerUsuario}', '{$rutaFoto}',now())";
            return $registroFotos->insertarFotoPerfil($query);
        }else{

        }
    }
}
?>