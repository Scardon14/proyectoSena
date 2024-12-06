<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../css/mi_perfil_barbero.css">
    <title>Mi perfil</title>
</head>

<body>
    <!--Header-->
    <header>
        <?php include('../view/header.php'); ?>
    </header>
    <section id="perfil">
        <div id="perfil-usuario" idPerfil="<?= $usuario['idPerfil'] ?>" idUsuario="<?= $usuario['idUsuario'] ?>"
            idNegocio="<?= $usuario['idNegocio'] ?>"></div>
        <div id="fotoPerfil">
            <img src="<?= $_SESSION['foto-perfil']['fotoPerfil_Logo']; ?>" alt="foto perfil">
        </div>
        <div class="nombreBarbero">
            <h2> <?= $usuario['nombres']; ?> <?= $usuario['apellidos']; ?></h2>
        </div>

        <div class="infoPerfil">
            <label id="informacion">Información</label><br>
            <label>
                Correo:
                <?= $usuario['correoElectronico']; ?>
            </label><br>
            <label>Celular: <?= $usuario['numeroCelular']; ?></label><br>
    </section>

    <div class="galeria">
        <h3>Galería de Fotos</h3><br>
        <div idUsuario="<?= $usuario['idUsuario']; ?>" id="usuario">
            </dividU>
            <?php
            $fotosTrabajo = $_SESSION['fotos-trabajo'];
            foreach ($fotosTrabajo as $foto) { ?>
                <div class="fotos-contenedor" id="foto-<?= $foto['idFotografia'] ?>"> <!-- Contenedor para todas las fotos -->

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

                </div>
            <?php } ?>
        </div>
        

    </div>
        

        <script src="../js/fotos.js"></script>

        <footer>
            <?php include('../view/footer.html'); ?>
        </footer>
</body>

</html>