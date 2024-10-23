<?php
require("RegistroNegocio.php");
$mensaje = '';
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nombre = $_POST['nombre del establecimiento'];
    $NIT = $_POST['NIT'];
    $celular = $_POST['celular'];
    $correo = $_POST['correo'];
    $direccion = $_POST['direccion'];
    $contraseña = $_POST['contraseña1'];
    $confirmarContraseña = $_POST['contraseña2'];
    $barbero = new RegistroNegocio();

    try{    
        $query = "insert into Nrgocio (idNegocio,nombre del establecimiento,NIT,numeroCelular
                                        correoElectronico,direccion,estado,fechaCreacion)
                                        values(2,1,'{$nombre }','{$NIT}','{$celular}','{$correo}','{$direccion}'1,now())";
        $insertarBarbero = $barbero->insertarDatos($query);
        $mensaje = 'Registro Exitoso.';
        
    }catch(PDOException $e){
        $mensaje = 'Registro Fallido.'. $e->getMessage();
    }
}
header("Location: ../view/index.php?mensaje=" . urlencode($mensaje));
exit();
?>
