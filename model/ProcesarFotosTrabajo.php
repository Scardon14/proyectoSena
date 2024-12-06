<?php
include_once("FotosTrabajo.php");
include_once("ProcesarFotos.php");
$fotosTrabajo = new FotosTrabajo();
$insertarFoto = new ProcesarFotos();
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $idUsuario = $_GET['idUsuario'];
    $idPerfil = $_GET['idPerfil'];
    session_start();
    $_SESSION['fotos-trabajo'] = $fotosTrabajo->obtenerFotosTrabajoPorUsuario($idUsuario);
    if ($idPerfil == 1) {
        header(header: 'Location: ../view/mibarberia_negocio.php');
    } else if ($idPerfil == 2) {
        header(header: 'Location: ../view/miperfil_barbero.php');
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    header("Content-Type: application/json");
    // Leer los datos del cuerpo de la solicitud (php://input)
    $rawData = file_get_contents("php://input");
    // Usar parse_str para intentar separar los parámetros del cuerpo de la solicitud
    parse_str($rawData, $data);
    // Mostrar el contenido del $data para depurar
    // Verificar si el archivo fue subido
    if (isset($_POST['id'])) {
        $id = $_POST['id']; // Id de la foto enviado por POST
        $fotoNueva = $_FILES['fotoNueva'];
        $fotoActual = $_POST['fotoActual']; // Campo correspondiente
        $campo = $_POST['campo']; // Campo correspondiente
        $usuario = $_POST['idUsuario'];
        // Mover el archivo desde el directorio temporal a la ruta destino
        if ($insertarFoto->actualizarFotos((string)$fotoActual, $fotoNueva, $campo, $usuario)) {
            // Aquí puedes actualizar el registro en la base de datos si es necesario
            echo json_encode([
                "success" => true,
                "message" => "Foto subida correctamente",
                "filePath" => $fotoNueva['name']
            ]);
        } else {
            echo json_encode(["error" => "No se pudo mover el archivo"]);
        }
    } else {
        echo json_encode(["error" => "Faltan parámetros"]);
    }
}

?>