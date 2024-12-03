<?php
require("CalendarioBarbero.php"); // Importa el archivo
include_once("ReservaCliente.php");
$calendario = new CalendarioBarbero();
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $data = json_decode(file_get_contents('php://input'), true);  // Recibe los datos JSON

        if (isset($data['id']) && isset($data['fechaReserva'])) {
            $id = $data['id'];
            $fechaReserva = $data['fechaReserva'];
            $obtenerHorasAgendadas = $calendario->obenerReservas($id,$fechaReserva);
            // Simula una respuesta JSON
            echo json_encode($obtenerHorasAgendadas);
        }
    }else if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
        $data = json_decode(file_get_contents(filename: 'php://input'), true);
        if (isset($data['id']) && isset($data['estado'])) {
            $id = $data['id'];
            $estado = $data['estado'];
            $actualizar = $calendario->actualizarReservas($id,$estado);
            echo json_encode($actualizar);
        }else {
            // Si no llegan los datos esperados, devuelve un error JSON
            echo json_encode(["error" => "Datos no válidos"]);
        }
    }
    if($_SERVER['REQUEST_METHOD'] === "DELETE"){
        $data = json_decode(file_get_contents(filename: 'php://input'), true);
        if (isset($data['idReserva'])){
            $eliminarReserva = new ReservaCliente();
            $eliminarReserva = $eliminarReserva->eliminarReserva($data['idReserva']);
            if($eliminarReserva === 'Reserva Cancelada Exitosamente'){
                echo json_encode(value: ["success" => true, "message" => 'Reserva Cancelada Exitosamente']);

            }else{
                echo json_encode(value: ["success" => false, "message" => 'Error al Cancelar la reserva']);
            }
        }
    }


?>
