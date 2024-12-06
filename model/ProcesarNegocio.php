<?php
require("RegistroNegocio.php");
require("procesarFotos.php");
$mensaje = '';
$negocio = new RegistroNegocio();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $nit = $_POST['nit'];
    $celular = $_POST['celular'];
    $correo = $_POST['correo'];
    $direccion = $_POST['direccion'];
    $contraseña = $_POST['contraseña1'];
    $confirmarContraseña = $_POST['contraseña2'];
    $fotoPerfil = $_FILES['fotoPerfil'];
    $foto1 = $_FILES['fotoTrabajo1'];
    $foto2 = $_FILES['fotoTrabajo2'];
    $foto3 = $_FILES['fotoTrabajo3'];
    $foto4 = $_FILES['fotoTrabajo4'];
    $foto5 = $_FILES['fotoTrabajo5'];
    $insertarFoto = new ProcesarFotos();
    //consulta para verificar que el registro no exista
    $validar = "SELECT * FROM usuario WHERE correoElectronico ='$correo'";
    $validando = $negocio->obtenerUsuario($validar);
    if ($validando) {
        $mensaje = "El correo electrónico ya se encuentra registrado";
    } else {

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
        $query = "insert into empleado (idNegocio,nombres,numeroCelular,correoElectronico,estado,fechaCreacion,idUsuario)
                                        values('{$negocio->getConexionBD()->lastInsertId()}','{$nombre}','{$celular}','{$correo}','1',now(),'{$obetenerUsuario}')";
        $insertarEmpleado = $negocio->insertarDatos($query); /*Se invoca el metodo de crear barbero de la clase RegistroBarbero*/
        $a = $insertarFoto ->guardarFotoPerfil($fotoPerfil, $obetenerUsuario);
        $insertarFoto->guardarFotosTrabajo( $foto1, $foto2, 
        $foto3, $foto4, $foto5, $obetenerUsuario);

        $mensaje = 'Registro Exitoso.'; /*Se le asigna valor de exitoso, si el mismo lo fue*/
    } catch (PDOException $e) {
        $mensaje = 'Registro Fallido.' . $obetenerUsuario; /*Se envia un mensaje por si el registro es fallido*/
    }
    }
    header(header: "Location: ../view/index.php?mensaje=" . urlencode($mensaje)); /*Se redirecciona al index y se envia el mensaje por parametro*/
    exit();
}
if($_SERVER['REQUEST_METHOD'] == 'GET'){
    session_start();
    $_SESSION['negocios']  = $negocio->obetenerBarberias();
    header('Location: ../view/registros.php');
    exit();
}
