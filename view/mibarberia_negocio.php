<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mi Barberia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../css/mi_barberia_negocio.css">
</head>

<Body>
    <header>
        <?php include('../view/header.php');
        $servicios = $_SESSION['servicios'];
        ?>
    </header>
    <section id="presenta"> <!--Seccion de img con titulo-->
    <div id="perfil-usuario" idPerfil="<?=$usuario['idPerfil']?>" idUsuario="<?=$usuario['idUsuario']?>" idNegocio="<?=$usuario['idNegocio']?>"></div>
        <div id="foto">
            <img src="<?= $_SESSION['foto-perfil']['fotoPerfil_Logo']; ?>" alt="foto ">
        </div>
        <div class="nombreEstablecimiento">
            <h1> <?= $usuario['nombres']; ?> </h1>
        </div>

        <div class="info">
            <label id="informacion">Información</label><br>
            <label>
                Correo:
                <?= $usuario['correoElectronico']; ?>
            </label><br>
            <label>Celular: <?= $usuario['numeroCelular']; ?></label><br>
            <label>Contraseña:</label>
            <input type="password" id="contraseña" value="<?= $usuario['contraseña']; ?>"><br>
    </section>

    <section id="organizacion"> <!--Seccion de fondo blanco, img y texto-->
        <!-- Formulario que aparece al hacer clic en el lápiz -->
        <div id="editForm" class="hidden">
            <input type="text" id="textInput" value="STYLE">
            <button id="saveButton">Guardar</button>
        </div>
        <script src="../js/negocio.js"></script>
    </section>
    <!--informacion del -->



    <!--Tabla de precio de servicios-->
    <section id="vision">
        <div class="cassil">
            <div class="casil"></div>
            <div class="tex">
                <h1> Precios de servicios </h1>
                <!--Boton de -->
                <div class="button-container button-crear-servicio">
                    <span class="button-text" id="buttonText" class="centered-button">Crear Servicio</span>
                    <span class="icon" id="editIcon">&#9998;</span> <!-- Icono de lápiz -->
                </div>
                <div class="formulario-servicio ocultarDiv">
                    <form action="../model/ProcesarServicio.php" method="POST">
                        <div>
                            <label for="input-servicio">Servicio</label>
                            <input id="input-servicio" type="text" name="input-servicio">
                        </div>
                        <div>
                            <label for="input-detalle">Descripción</label>
                            <input id="input-detalle" type="text" name="input-detalle">
                        </div>
                        <div>
                            <label for="input-duracion">Duraciíon</label>
                            <input id="input-duracion" type="text" name="input-duracion">
                        </div>
                        <div>
                            <label for="input-precio">Precio</label>
                            <input id="input-precio" type="text" name="input-precio">
                        </div>
                        <div>
                            <button id="btn-cancelar" class="btn btn-small btn-danger btn-cancelar">
                                <i class="bi bi-x-circle-fill">Cancelar</i> </button>

                            </button> <button type="submit" class="btn btn-small btn-success">Crear</button>
                        </div>
                </div>

                <table class="style-table">
                    <thead>
                        <tr>
                            <th>Servicios</th>
                            <th>Descripción</th>
                            <th>Duración</th>
                            <th>Precios</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody id="body-servicios">
                        <div id="usuario" idUsuario="<?= $usuario['idUsuario']; ?>" hidden></div>
                        <div id="perfil" perfil="<?= $usuario['idPerfil']; ?>" hidden></div>
                        <div id="negocio" negocio="<?= $usuario['idNegocio']; ?>" hidden></div>

                        <?php
                        foreach ($servicios as $servicio) {
                            ?>
                            <tr id="servicio-<?= $servicio['idServicio'] ?>">
                                <td id="servicio" servicio="<?= $servicio['idServicio'] ?>"> <?= $servicio['nombre'] ?>
                                </td>
                                <td id="detalle" servicio="<?= $servicio['idServicio'] ?>"><?= $servicio['detalle'] ?>
                                </td>
                                <td id="duracion" servicio="<?= $servicio['idServicio'] ?>"><?= $servicio['duracion'] ?>
                                    minutos</td>
                                <td id="precio" servicio="<?= $servicio['idServicio'] ?>"><?= $servicio['precio'] ?>
                                </td>
                                <td id="accion" servicio="<?= $servicio['idServicio'] ?>">
                                    <button servicio="<?= $servicio['idServicio'] ?>"
                                        class="btn btn-small btn-success btn-editar"><i
                                            class="bi bi-pencil-square">Editar</i></button>
                                    <!--Boton editar-->
                                    <div class="idCliente" hidden>
                                        <input type="text" class="form-control" id="exampleInputname1" name="idCliente"
                                            aria-describedby="nameHelp" value="<?= $servicio['idServicio'] ?>" hidden>
                                    </div>
                                    <button servicio="<?= $servicio['idServicio'] ?>"
                                        class="btn btn-small btn-danger btn-eliminar"><i
                                            class="bi bi-trash3-fill"></i></button>
                                    <!-- Boton eliminar-->
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!--Gleria de establecimiento-->
    <div class="galeria">
        <h3>Galería de Fotos</h3><br>
        <?php
            $fotosTrabajo = $_SESSION['fotos-trabajo'];
            foreach ($fotosTrabajo as $foto) { ?>
        <div class="fotos-contenedor" id="foto-<?=$foto['idFotografia']?>"> <!-- Contenedor para todas las fotos -->
                <div class="foto">
                    <button idFoto="<?= $foto['idFotografia'] ?>" foto="<?= $foto['foto1'] ?>" campo="foto1"
                                class="btn btn-small btn-success btn-editar-1"><i class="bi bi-pencil-square"></i></button>
                    <img src="<?= $foto['foto1'] ?>" alt="Foto 1">
                </div>
                <div class="foto">
                    <button idFoto="<?= $foto['idFotografia'] ?>" foto="<?= $foto['foto2'] ?>" campo="foto2"
                                class="btn btn-small btn-success btn-editar-1"><i class="bi bi-pencil-square"></i></button>
                    <img src="<?= $foto['foto2'] ?>" alt="Foto 2">
                </div>
                <div class="foto">
                    <button idFoto="<?= $foto['idFotografia'] ?>" foto="<?= $foto['foto3'] ?>" campo="foto3"
                                class="btn btn-small btn-success btn-editar-1"><i class="bi bi-pencil-square"></i></button>
                    <img src="<?= $foto['foto3'] ?>" alt="Foto 3">
                </div>
                <div class="foto">
                    <button idFoto="<?= $foto['idFotografia'] ?>" foto="<?= $foto['foto4'] ?>" campo="foto4"
                                class="btn btn-small btn-success btn-editar-1"><i class="bi bi-pencil-square"></i></button>
                    <img src="<?= $foto['foto4'] ?>" alt="Foto 4">
                </div>
                <div class="foto">
                    <button idFoto="<?= $foto['idFotografia'] ?>" foto="<?= $foto['foto5'] ?>" campo="foto5"
                                class="btn btn-small btn-success btn-editar-1"><i class="bi bi-pencil-square"></i></button>
                    <img src="<?= $foto['foto5'] ?>" alt="Foto 5">
                </div>
            <?php } ?>
        </div>
    </div>
    <script src="../js/servicios.js"></script>
    <script src="../js/fotos.js"></script>

    <footer>
        <?php include('../view/footer.html'); ?>
    </footer>
    </div>
</Body>

</html>