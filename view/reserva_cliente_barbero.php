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
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../css/administrador2.css">
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
                            <li><a href="../view/index_usuario.php">Inicio</a></li>
                            <li><a href="../view/localesUsuario.php">Locales</a></li>
                            <li><a href="../view/miPerfil_usuario.php">Mi perfil</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>

        <div>

            <h2 class="titulo_MiAgenda">Mis Reservas</h2>
            <div class="container-fluid row">
                <div class="">
                    <table class="table"> <!-- Fila de titulos-->
                        <thead class="">
                            <tr class="">
                                <th scope="col">idReserva</th>
                                <th scope="col">Barbero</th>
                                <th scope="col">Estado</th>
                                <th scope="col">Fecha inicio</th>
                                <th scope="col">Fecha fin</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            session_start();
                            $reservas = $_SESSION['reservas_cliente'];
                            $estado = null;
                            foreach ($reservas as $reserva) {
                                if ($reserva['estado'] === 2) {
                                    $estado = 'Pendiente';
                                }
                                ?>

                                <tr> <!-- Fila de datos de la persona-->
                                    <td><?= $reserva['idReserva']; ?></td>
                                    <td><?= $reserva['nombres']; ?>     <?= $reserva['apellidos']; ?></td>
                                    <td><?= $estado ?></td>
                                    <td><?= $reserva['fechaReserva']; ?></td>
                                    <td><?= $reserva['fechaFinalizacion']; ?></td>
                                    <td>
                                        <a href="../model/actualizarreserva.php?id=<?= $reserva['idReserva']; ?>"
                                            class="btn btn-small btn-success"><i class="bi bi-pencil-square">Editar</i></a>
                                        <!--Boton editar-->
                                        <form action="../model/eliminarreserva.php" method="POST">
                                            <div class="idreserva" hidden>
                                                <input type="text" class="form-control" id="exampleInputname1"
                                                    name="idreserva" aria-describedby="nameHelp"
                                                    value="<?= $reserva['idreserva'] ?>" hidden>
                                            </div>
                                            <button type="submit" class="btn btn-small btn-danger"><i
                                                    class="bi bi-trash3-fill">Cancelar</i></button> <!-- Boton eliminar-->
                                        </form>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <h2 class="titulo_MiAgenda">Reservar</h2>
        <div class="container-fluid row">
                <div class="">
                    <table class="table"> <!-- Fila de titulos-->
                        <thead class="">
                            <tr class="">
                                <th scope="col">Nombre Establecimiento</th>
                                <th scope="col">Numero Celular</th>
                                <th scope="col">Dirección</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $negocios = $_SESSION['negocios'];
                            foreach ($negocios as $negocio) {
                                ?>

                                <tr> <!-- Fila de datos de la persona-->
                                    <td><?= $negocio['nombreEstablecimiento']; ?></td>
                                    <td><?= $negocio['numeroCelular']; ?>     <?= $reserva['apellidos']; ?></td>
                                    <td><?= $negocio['direccion']; ?></td>
                                    <td>
                                        <a href="../model/actualizarreserva.php?id=<?= $reserva['idReserva']; ?>"
                                            class="btn btn-small btn-success"><i class="bi bi-pencil-square">Reservar</i></a>
                                        <!--Boton editar-->
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        <footer>
            <?php include('../view/footer.html'); ?>
        </footer>

        <script type="text/javascript" src="../js/agenda_Barbero.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
</body>

</html>