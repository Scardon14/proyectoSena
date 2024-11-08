<?php
// Verificar si los parámetros están presentes en la URL
$diaSeleccionado = isset($_GET['dia']) ? $_GET['dia'] : 'No seleccionado';
$horaSeleccionada = isset($_GET['hora']) ? $_GET['hora'] : 'No seleccionado';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text:ital@0;1&family=Roboto:ital,wght@0,100;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/historial_citas.css">
    <title> O&T Historial Citas</title>
</head>

<body>
    <header>
        <div class="contenedor-encabezado"> <!--Encabezado Azul-->
            <div class="logo">
                <img src="../img/logo.png" alt="logo">
            </div>
            <div class="nombre">
                <h1>O & T</h1>
            </div>
        </div>
        <div class="contenedor_menu"> <!--Encabezado rojo-->
            <div class="menu">
                <nav>
                <ul>
                         <li><a href="../view/index_usuario.php">Inicio</a></li>
                         <li><a href="../view/localesUsuario.php">Locales</a></li>
                         <li><a href="../view/miPerfil_usuario.php">Mi perfil</a></li>
                        </ul>
                </nav>
            </div>
        </div>
    </header>
    <div class="historialCita">
        <h2>Historial de Citas</h2>
        <div class="textoCita">
            <p>Has agendado una cita el día <strong><?php echo $diaSeleccionado; ?>
                </strong> a las <strong><?php echo $horaSeleccionada; ?></strong></p>
                <form action="cancelar_cita.php" method="post">
            <input type="hidden" name="dia" value="<?php echo $diaSeleccionado; ?>">
            <input type="hidden" name="hora" value="<?php echo $horaSeleccionada; ?>">
        </div>
        <div class="cancelarCita">
                <button type="submit">Cancelar Cita</button>
            </div>
        </form>
    </div>
    <footer>
        <?php include('../view/footer.html'); ?>
    </footer>
</body>
</html>