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
            <?php include('../view/header.php'); ?>
        </header>

        <div>

            <h2 class="titulo_MiAgenda">Servicios</h2>
            <div class="container-fluid row">
                <div class="">
                    <table class="table"> <!-- Fila de titulos-->
                        <thead class="">
                            <tr class="">
                                <th scope="col">Servicio</th>
                                <th scope="col">Detalle</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Duración</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $servicios = $_SESSION['servicios'];
                            $usuario = $_SESSION["usuarioLogueado"];
                            foreach ($servicios as $servicio) {
                                ?>

                                <tr> <!-- Fila de datos de la persona-->
                                    <td><?= $servicio['nombre']; ?></td>
                                    <td><?= $servicio['detalle']; ?></td>
                                    <td><?= $servicio['precio']; ?></td>
                                    <td><?= $servicio['duracion']; ?></td>
                                    <td>
                                        <a href="../model/ProcesarReservaBarbero.php?idNegocio=<?= $servicio['idNegocio']; ?>&idCliente=<?= $usuario['idCliente']; ?>"
                                            class="btn btn-small btn-success"><i
                                                class="bi bi-pencil-square">Seleccionar</i></a>
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