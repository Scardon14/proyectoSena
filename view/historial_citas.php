<?php
// Verificar si los parámetros están presentes en la URL
$diaSeleccionado = isset($_GET['dia']) ? $_GET['dia'] : 'No seleccionado';
$horaSeleccionada = isset($_GET['hora']) ? $_GET['hora'] : 'No seleccionado';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <link rel="stylesheet" href="../css/historial_citas.css">
    <title>Historial Citas</title>
</head>

<body>
    <!--Header-->
    <header>
        <?php include('../view/header.php'); ?>
    </header>
    <section>
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
    </section>
    <footer>
            <?php include('../view/footer.html'); ?>
    </footer>
</body>

</html>