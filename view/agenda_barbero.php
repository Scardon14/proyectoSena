<!DOCTYPE html>
<html lang="es">
<!--Head-->

<head>
    <meta charset="UTF-8"> <!--etiqueta que permite caracteres especiales como por ej:ñ-->
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <!-- ayuda al tema responsive de las pantallas-->
    <link rel="stylesheet" href="../css/agenda_Barbero.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Serif+Text:ital@0;1&family=Roboto:ital,wght@0,100;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">

    <title>Mi Agenda</title>
</head>

<body>
    <div class="main">
        <!--Header-->
        <header>
            <div class="contenedor-encabezado"> <!--Encabezado Azul-->
                <div class="logo">
                    <img src="../img/logo.png" alt="logo">
                </div>
                <div class="nombre">
                    <h1> O & T </h1>
                </div>
            </div>
            <div class="contenedor_menu"> <!--Encabezado rojo-->
                <div class="menu">
                    <nav>
                        <ul>
                            <li><a href="../view/index_barbero.php">Inicio</a></li>
                            <li><a href="/model/ProcesarCalendarioBarbero.php">Mi Agenda</a></li>
                            <li><a href="../view/miPerfil_barbero.php">Mi perfil</a></li>
                            <li><a href="../view/historial_citas.php">Historial Citas</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
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