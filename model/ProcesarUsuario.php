<?php
require("RegistroUsuario.php");
$mensaje = '';
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $celular = $_POST['celular'];
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña1'];
    $confirmarContraseña = $_POST['contraseña2'];
    $usuario = new RegistroUsuario();

    try{    
        $query = "insert into persona (idPerfil,idNegocio,apellidos,nombres,
                                        correoElectronico,numeroCelular,estado,fechaCreacion)
                                        values(1,null,'{$apellido}','{$nombre}','{$correo}','{$celular}',1,now())";
        $insertarUsuario = $usuario->insertarDatos($query);
        $mensaje = 'Registro Exitoso.';
        
    }catch(PDOException $e){
        $mensaje = 'Registro Fallido.'. $e->getMessage();
    }
}
header("Location: ../view/index.php?mensaje=" . urlencode($mensaje));
exit();
?>

