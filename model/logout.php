<?php
class Logout{
    function logout(){
        session_start(); // Asegúrate de iniciar la sesión
        session_unset(); // Limpiar todas las variables de sesión
        session_destroy(); // Destruir la sesión
    }
}
?>