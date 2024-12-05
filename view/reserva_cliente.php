<!DOCTYPE html>
<html lang="es">
<!--Head-->

<head>
      <!--Header-->
<?php include('../view/header.php'); ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../css/administrador2.css">
    <link rel="stylesheet" href="../css/agenda_Barbero.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>Mi Agenda</title>
</head>

<body>
    <div class="main">
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
                            $reservas = $_SESSION['reservas_cliente'];
                            $estado = null;
                            $usuario = $_SESSION["usuarioLogueado"];
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
                                        <form action="../model/EliminarReserva.php" method="POST">
                                            <div class="idreserva" hidden>
                                                <input type="text" class="form-control" id="exampleInputname1"
                                                    name="idReserva" aria-describedby="nameHelp"
                                                    value="<?= $reserva['idReserva'] ?>" hidden>
                                                <input name="idCliente" hidden value ="<?= $usuario['idCliente']?>">
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
                                <td><?= $negocio['numeroCelular']; ?></td>
                                <td><?= $negocio['direccion']; ?></td>
                                <td>
                                    <a href="../model/ProcesarServicio.php?idNegocio=<?=$negocio['idNegocio'];?>" class="btn btn-small btn-success"><i
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
        <footer>
            <?php include('../view/footer.html'); ?>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
</body>

</html>