<?php
session_start();


// Usar el valor almacenado en la sesión

/*Recibe los datos del formulario HTML en este caso Formulario Registro Barbero*/
require("CalendarioBarbero.php"); /*Importa el archivo registroBarbero*/
$mensaje = 'Hola'; /*Se crea variable que se utiliza para indicarle al usuario si el proceso de registro fue exitoso o fallido*/
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Verificar si 'id' está en la URL
if (isset($_GET['id'])) {
    // Guardar el parámetro 'id' en la sesión
    $_SESSION['id'] = $_GET['id'];

    // Redirigir al usuario a la misma página para que el parámetro desaparezca de la URL
    //header('Location: ../view/agenda_barbero.php');
    //exit();
}
 /*Verificamos que la peticion que se envie desde el formulario sea de tipo POST*/
    $calendario = new CalendarioBarbero();
    if (isset($_SESSION['id'])) {
        $id = $_SESSION['id'];
        $fecha = $_SESSION['id'];

        echo "Mostrando detalles del ID: " . htmlspecialchars($id);
        try {
           
            $obtenerHorasAgendadas = $calendario->obenerReservas($id); /*Se invoca el metodo de crear barbero de la clase RegistroBarbero*/
            $mensaje = 'Registro Exitoso.'; /*Se le asigna valor de exitoso, si el mismo lo fue*/
            $_SESSION['listaReserva']=$obtenerHorasAgendadas;
        } catch (PDOException $e) {
            $mensaje = 'Registro Fallido.' . $obetenerUsuario; /*Se envia un mensaje por si el registro es fallido*/
        }
    } else {
        $mensaje = "ID no especificado.";
    }
   
}
header("Location: ../view/agenda_barbero.php?mensaje=" . urlencode($mensaje)); /*Se redirecciona al index y se envia el mensaje por parametro*/
exit();
