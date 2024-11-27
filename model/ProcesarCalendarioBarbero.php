<?php

require("CalendarioBarbero.php"); // Importa el archivo

    $calendario = new CalendarioBarbero();
    $data = json_decode(file_get_contents('php://input'), true);  // Recibe los datos JSON

    if (isset($data['id']) && isset($data['fechaReserva'])) {
        $id = $data['id'];
        $fechaReserva = $data['fechaReserva'];
        $obtenerHorasAgendadas = $calendario->obenerReservas($id,$fechaReserva);
        // Simula una respuesta JSON
        echo json_encode($obtenerHorasAgendadas);
    }
?>
