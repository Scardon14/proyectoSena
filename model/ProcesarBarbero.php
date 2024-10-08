<?php
require("RegistroBarbero.php");
$mensaje = '';
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $celular = $_POST['celular'];
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña1'];
    $confirmarContraseña = $_POST['contraseña2'];
    $barbero = new RegistroBarbero();

    try{    
        $query = "insert into persona (idPerfil,idNegocio,apellidos,nombres,
                                        correoElectronico,numeroCelular,estado,fechaCreacion)
                                        values(2,1,'{$apellido}','{$nombre}','{$correo}','{$celular}',1,now())";
        $insertarBarbero = $barbero->insertarDatos($query);
        $mensaje = 'Registro Exitoso.';
        
    }catch(PDOException $e){
        $mensaje = 'Registro Fallido.'. $e->getMessage();
    }
}
header("Location: ../view/index.php?mensaje=" . urlencode($mensaje));
exit();
?>
