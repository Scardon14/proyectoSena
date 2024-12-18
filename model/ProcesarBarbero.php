<?php
/*Recibe los datos del formulario HTML en este caso Formulario Registro Barbero*/
require("RegistroBarbero.php"); /*Importa el archivo registroBarbero*/
require("procesarFotos.php");
$mensaje = ''; /*Se crea variable que se utiliza para indicarle al usuario si el proceso de registro fue exitoso o fallido*/
if ($_SERVER["REQUEST_METHOD"] == "POST") { /*Verificamos que la peticion que se envie desde el formulario sea de tipo POST*/
    $idnegocio = $_POST['id-negocio']; /*Se capturan los valores que tienen los inputs del html*/
    $nombre = $_POST['nombre']; /*Se capturan los valores que tienen los inputs del html*/
    $apellido = $_POST['apellido']; /*Se capturan los valores que tienen los inputs del html*/
    $celular = $_POST['celular']; /*Se capturan los valores que tienen los inputs del html*/
    $correo = $_POST['correo']; /*Se capturan los valores que tienen los inputs del html*/
    $contraseña = $_POST['contraseña1']; /*Se capturan los valores que tienen los inputs del html*/
    $confirmarContraseña = $_POST['contraseña2']; /*Se capturan los valores que tienen los inputs del html*/
    $fotoPerfil = $_FILES['fotoPerfil'];
    $foto1 = $_FILES['fotoTrabajo1'];
    $foto2 = $_FILES['fotoTrabajo2'];
    $foto3 = $_FILES['fotoTrabajo3'];
    $foto4 = $_FILES['fotoTrabajo4'];
    $foto5 = $_FILES['fotoTrabajo5'];
    $insertarFoto = new ProcesarFotos();
    $barbero = new RegistroBarbero(); /*Se crea objeto de RegistroBarbero y se podra acceder a los metodos de insersion*/

    //consulta para verificar que el registro no exista
    $validar = "SELECT * FROM usuario WHERE correoElectronico ='$correo'";
    $validando = $barbero->obtenerUsuario($validar);
    if ($validando) {
        $mensaje = "El correo electrónico ya se encuentra registrado";
    } else {

        try {
            $query = "insert into usuario (idPerfil,correoElectronico,contraseña,estado, 
                                        fechaCreacion)
                                        values(2,'{$correo}','{$contraseña}','1',now())"; /*Se crea el insert que se va a ejecutar para crear */
            $insertarBarbero = $barbero->insertarDatos($query); /*Se invoca el metodo de crear barbero de la clase RegistroBarbero*/
            $query = "select * from usuario  where correoElectronico = '{$correo}'";
            $obetenerUsuario = $barbero->obtenerUsuario($query);
            $query = "insert into empleado (idNegocio,apellidos,nombres, 
                                        correoElectronico,numeroCelular,estado,fechaCreacion,idUsuario)
                                        values('{$idnegocio}','{$apellido}','{$nombre}','{$correo}','{$celular}',1,now(),'{$obetenerUsuario}')"; /*Se crea el insert que se va a ejecutar para crear 
el rol Barbero*/
            $insertarBarbero = $barbero->insertarDatos($query); /*Se invoca el metodo de crear barbero de la clase RegistroBarbero*/
            $a = $insertarFoto->guardarFotoPerfil($fotoPerfil, $obetenerUsuario);
            $insertarFoto->guardarFotosTrabajo(
                $foto1,
                $foto2,
                $foto3,
                $foto4,
                $foto5,
                $obetenerUsuario
            );

            $mensaje = 'Registro Exitoso. ' . $obetenerUsuario; /*Se le asigna valor de exitoso, si el mismo lo fue*/
        } catch (PDOException $e) {
            $mensaje = 'Registro Fallido.'; #; /*Se envia un mensaje por si el registro es fallido*/
        }
    }
}
header("Location: ../view/index.php?mensaje=" . urlencode($mensaje)); /*Se redirecciona al index y se envia el mensaje por parametro*/
exit();
?>