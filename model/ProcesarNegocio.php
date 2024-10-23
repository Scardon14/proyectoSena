<?php
require("RegistroNegocio.php");
$mensaje = '';
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nombre = $_POST['nombre'];
    $nit = $_POST['nit'];
    $celular = $_POST['celular'];
    $correo = $_POST['correo'];
    $direccion = $_POST['direccion'];
    $contraseña = $_POST['contraseña1'];
    $confirmarContraseña = $_POST['contraseña2'];
    $negocio = new RegistroNegocio();

    try {
        $query = "insert into usuario (idPerfil,correoElectronico,contraseña,estado, 
                                        fechaCreacion)
                                        values(1,'{$correo}','{$contraseña}','1',now())"; /*Se crea el insert que se va a ejecutar para crear */
        $insertarNegocio = $negocio->insertarDatos($query); /*Se invoca el metodo de crear barbero de la clase RegistroBarbero*/
        $query = "select * from usuario  where correoElectronico = '{$correo}'";
        $obetenerUsuario = $negocio->obtenerUsuario($query);
        $query = "insert into negocio   (nombreEstablecimiento, numeroCelular,
                                        correoElectronico, direccion,nit,estado,fechaCreacion)
                                        values('{$nombre}','{$celular}','{$correo}','{$direccion}', '{$nit}' ,1,now())"; /*Se crea el insert que se va a ejecutar para crear 
                                        el rol Barbero*/
        $insertarNegocio = $negocio->insertarDatos($query); /*Se invoca el metodo de crear barbero de la clase RegistroBarbero*/
        $mensaje = 'Registro Exitoso.'; /*Se le asigna valor de exitoso, si el mismo lo fue*/
    } catch (PDOException $e) {
        $mensaje = 'Registro Fallido.' . $obetenerUsuario; /*Se envia un mensaje por si el registro es fallido*/
    }
}
header("Location: ../view/index.php?mensaje=" . urlencode($mensaje)); /*Se redirecciona al index y se envia el mensaje por parametro*/
exit();
