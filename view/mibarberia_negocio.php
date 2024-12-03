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
        <h1 class="org">Style</h1>
        <div id="fotoPerfil">
            <img src="<?= $_SESSION['foto-perfil']['fotoPerfil_Logo']; ?>" alt="foto perfil">
        </div>
    </section>

    <section id="organizacion"> <!--Seccion de fondo blanco, img y texto-->
        <!--Boton de perfil-->
        <div class="button-container">
            <span class="button-text" id="buttonText" class="centered-button">STYLE</span>
            <span class="icon" id="editIcon">&#9998;</span> <!-- Icono de lápiz -->
        </div>

        <!-- Formulario que aparece al hacer clic en el lápiz -->
        <div id="editForm" class="hidden">
            <input type="text" id="textInput" value="STYLE">
            <button id="saveButton">Guardar</button>
        </div>
        <script src="../js/negocio.js"></script>
    </section>

    <!--textos-->
    <d1iv class="casi">
        <div class="casilla"></div>
        <div class="text-al">
            <P style="text-align: center;">
                Style es una barberia moderna y elegante especializada en cortes de cabello clasicos y contemporaneos,
                afeitados de precision y cuidados de la barba bindando un ambiente acogedor, Contamos con un personal
                experto que te ayudara con tus cambios de looks y hara lo posible por cumplir todas tus expectativas.
            </p>
        </div>
        </div>


        <!--informacion del perfil-->



        <!--Tabla de precio de servicios-->
        <section id="vision">
            <div class="cassil">
                <div class="casil"></div>
                <div class="tex">
                    <h1> Precios de servicios </h1>
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
                        <tbody>
                            <div id="usuario" usuario="<?=$usuario['idUsuario'];?>" hidden></div>
                            <div id="perfil" perfil="<?=$usuario['idPerfil'];?>" hidden></div>
                            <div id="negocio" negocio="<?=$usuario['idNegocio'];?>" hidden></div>

                            <?php
                            foreach ($servicios as $servicio) {
                                ?>
                                <tr id="servicio-<?=$servicio['idServicio']?>">
                                    <td id = "servicio" servicio="<?= $servicio['idServicio'] ?>"> <?= $servicio['nombre'] ?></td>
                                    <td id = "detalle" servicio="<?= $servicio['idServicio'] ?>"><?= $servicio['detalle'] ?></td>
                                    <td id = "duracion" servicio="<?= $servicio['idServicio'] ?>"><?= $servicio['duracion'] ?> minutos</td>
                                    <td id = "precio" servicio="<?= $servicio['idServicio'] ?>" ><?= $servicio['precio'] ?></td>
                                    <td id = "accion" servicio="<?= $servicio['idServicio'] ?>" >
                                        <button servicio="<?= $servicio['idServicio'] ?>" class="btn btn-small btn-success" type="submit"><i class="bi bi-pencil-square">Editar</i></button>
                                        <!--Boton editar-->
                                            <div class="idCliente" hidden>
                                                <input type="text" class="form-control" id="exampleInputname1"
                                                    name="idCliente" aria-describedby="nameHelp"
                                                    value="<?= $servicio['idServicio'] ?>" hidden>
                                            </div>
                                            <button servicio="<?= $servicio['idServicio'] ?>" type="submit" class="btn btn-small btn-danger"><i
                                                    class="bi bi-trash3-fill"></i></button> <!-- Boton eliminar-->
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
        <h1 style="text-align: center;">Galeria de fotos </h1>
        <div class="container">

            <div class="box">
                <img src="../img/barberia 1.png" alt="">
            </div>
            <div class="box">
                <img src="../img/barberia 2.png" alt="">
            </div>
            <div class="box">
                <img src="../img/barberia 3.png" alt="">
            </div>
            <div class="box">
                <img src="../img/barberia 4.png" alt="">
            </div>
            <div class="box">
                <img src="../img/barberia 5.png" alt="">
            </div>
            <div class="box">
                <img src="../img/barberia 6.png" alt="">
            </div>
        </div>
        <script src="../js/servicios.js"></script>

        <footer>
            <?php include('../view/footer.html'); ?>
        </footer>
        </div>
</Body>

</html>