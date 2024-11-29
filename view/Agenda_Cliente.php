<!DOCTYPE html>
<html lang="es">
<!--Head-->
<head>
    <link rel="stylesheet" href="../css/agenda_Barbero.css">
    <title>Mi Agenda</title>
</head>

<body>
    <div class="main">
        <!--Header-->
        <header>
<?php include('../view/headerUsuario.php'); ?>
</header>

        <div>
            <?php session_start();
            if (isset($_SESSION['listaReserva'])) {
                $listado = $_SESSION['listaReserva'];
                foreach ($listado as $fila) {
                    print_r($fila['idReserva']); // Muestra cada fila
                }
            ?>
                <div class="">12:00</div>
            <?php
            }
            ?>
            <h1 class="titulo_MiAgenda">Mi Agenda Barbero</h1>

            <div class="calendario">
                <div>
                    <div class="info_calendario">
                        <div class="calendario_prev" id="prev_mes">&#9664;</div>
                        <div class="calendario_mes" id="mes"></div>
                        <div class="calendario_año" id="año"></div>
                        <div class="calendario_next" id="next_mes">&#9654;</div>
                    </div>
                    <div class="calendario_semana">
                        <div class="calendario_dia calendario_item">Lunes</div>
                        <div class="calendario_dia calendario_item">Martes</div>
                        <div class="calendario_dia calendario_item">Miércoles</div>
                        <div class="calendario_dia calendario_item">Jueves</div>
                        <div class="calendario_dia calendario_item">Viernes</div>
                        <div class="calendario_dia calendario_item">Sábado</div>
                        <div class="calendario_dia calendario_item">Domingo</div>
                    </div>
                    <div class="calendario_fechas" id="fechas"></div>
                </div>
                <div class="recuadroHoras_principal"> </div>
                <div id="recuadro-horas" style="display: none;">
                    <button id="btn-cerrar-recuadro">x</button>
                    <h3>Seleccione la hora del día <span id="dia-seleccionado"></span></h3>
                    <div id="horas-disponibles">
                        <?php session_start();
                        if (isset($_SESSION['listaReserva'])) {
                            $listado = $_SESSION['listaReserva'];
                            foreach ($listado as $fila) {
                                print_r($fila); // Muestra cada fila
                            }
                        ?>
                            <div class="hora-item">12:00</div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <?php include('../view/footer.html'); ?>
        </footer>

        <script type="text/javascript" src="../js/agenda_Barbero.js"></script>
</body>

</html>