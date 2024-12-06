<?php
/*Recibe los datos del formulario HTML en este caso Formulario Registro Barbero*/
require("Login.php"); /*Importa el archivo registroBarbero*/
$mensaje = ''; /*Se crea variable que se utiliza para indicarle al usuario si el proceso de registro fue exitoso o fallido*/
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    /*Verificamos que la peticion que se envie desde el formulario sea de tipo POST*/
    $correo = $_POST['correo']; /*Se capturan los valores que tienen los inputs del html*/
    $contraseña = $_POST['contraseña']; /*Se capturan los valores que tienen los inputs del html*/
    $Login = new Login();
    $sesionActiva = $Login->login($correo, $contraseña);
    print_r( $sesionActiva);
    if (!empty($sesionActiva)) {
        session_start();
        $_SESSION['usuarioLogueado'] = $sesionActiva;
        $usuario = $sesionActiva['idPerfil'];
        if ($usuario === '1' || $usuario === 1) {
            echo("". $usuario);
            header("Location: ../view/index_negocio.php");
        } else if ($usuario === '2' || $usuario === 2) {
            echo("". $usuario);
            header("Location: ../view/index_barbero.php");
        } else if ($usuario === '3'|| $usuario === 3) {
            echo("". $usuario);
            header("Location: ../view/index_usuario.php");
        }else if ($usuario === '4'|| $usuario === 4) {
            echo("". $usuario);
            header("Location: ../model/listadoClientes.php");
        }
    } else {
        header("Location: ../view/inicioSesion.php?mensaje=" . urlencode("Usuario y/o contraseña invalida")); /*Se redirecciona al index y se envia el mensaje por parametro*/
    }
}
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    require("logout.php");
    $logout = new Logout();
    $logout->logout();
    header("Location: ../view/index.php");
}
?>