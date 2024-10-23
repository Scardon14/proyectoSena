<?php
/*Recibe los datos del formulario HTML en este caso Formulario Registro Barbero*/
require("RegistroBarbero.php"); /*Importa el archivo registroBarbero*/
$mensaje = ''; /*Se crea variable que se utiliza para indicarle al usuario si el proceso de registro fue exitoso o fallido*/
if($_SERVER["REQUEST_METHOD"] == "POST"){ /*Verificamos que la peticion que se envie desde el formulario sea de tipo POST*/
    $nombre = $_POST['nombre']; /*Se capturan los valores que tienen los inputs del html*/
    $apellido = $_POST['apellido']; /*Se capturan los valores que tienen los inputs del html*/
    $celular = $_POST['celular']; /*Se capturan los valores que tienen los inputs del html*/
    $correo = $_POST['correo']; /*Se capturan los valores que tienen los inputs del html*/
    $contraseña = $_POST['contraseña1']; /*Se capturan los valores que tienen los inputs del html*/
    $confirmarContraseña = $_POST['contraseña2']; /*Se capturan los valores que tienen los inputs del html*/
    $barbero = new RegistroBarbero(); /*Se crea objeto de RegistroBarbero y se podra acceder a los metodos de insersion*/ 

    try{    
        $query = "insert into persona (idPerfil,idNegocio,apellidos,nombres, 
                                        correoElectronico,numeroCelular,estado,fechaCreacion)
                                        values(2,1,'{$apellido}','{$nombre}','{$correo}','{$celular}',1,now())"; /*Se crea el insert que se va a ejecutar para crear 
                                        el rol Barbero*/
        $insertarBarbero = $barbero->insertarDatos($query); /*Se invoca el metodo de crear barbero de la clase RegistroBarbero*/
        $mensaje = 'Registro Exitoso.'; /*Se le asigna valor de exitoso, si el mismo lo fue*/
        
    }catch(PDOException $e){
        $mensaje = 'Registro Fallido.'. $e->getMessage(); /*Se envia un mensaje por si el registro es fallido*/
    }
}
header("Location: ../view/index.php?mensaje=" . urlencode($mensaje)); /*Se redirecciona al index y se envia el mensaje por parametro*/
exit();
?>
