<?php
/*Recibe los datos del formulario HTML en este caso Formulario Registro Barbero*/
require("Login.php"); /*Importa el archivo registroBarbero*/
$mensaje = ''; /*Se crea variable que se utiliza para indicarle al usuario si el proceso de registro fue exitoso o fallido*/
if ($_SERVER["REQUEST_METHOD"] == "POST") { /*Verificamos que la peticion que se envie desde el formulario sea de tipo POST*/
    $correo = $_POST['correo']; /*Se capturan los valores que tienen los inputs del html*/
    $contraseña = $_POST['contraseña']; /*Se capturan los valores que tienen los inputs del html*/
    $Login = new Login();
    $sesionActiva= $Login->login($correo,$contraseña);

    if(!empty($sesionActiva)){
        session_start();
        $_SESSION['usuarioLogueado'] = $sesionActiva;
        foreach ($sesionActiva as $fila) {
            if($fila['idPerfil'] == 1){
                header("Location: ../view/index_negocio.php"); 
            }else if($fila['idPerfil'] == 2){
                header("Location: ../view/index_barbero.php"); 
            }else if($fila['idPerfil'] == 3){
                header("Location: ../view/index_usuario.php"); 
            }
        }

    }else{
        header("Location: ../view/inicioSesion.php?mensaje="  . urlencode("Usuario y/o contraseña invalida")); /*Se redirecciona al index y se envia el mensaje por parametro*/
    }

 }
?>