<?php
// Aquí podrías conectar con tu base de datos para eliminar o marcar como cancelada la cita
$dia = $_POST['dia'];
$hora = $_POST['hora'];

// Lógica para cancelar la cita en tu base de datos

// Redireccionar de vuelta a la página de historial o una página de confirmación
header("Location: historial_citas.php?mensaje=Cita cancelada exitosamente");
?>
