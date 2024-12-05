<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../css/perfil_usuario.css">
    <title>Mi Perfil</title>
</head>

<Body>
    <!--Header-->
    <header>
        <?php include('../view/header.php'); ?>
    </header>
    <section class="perfil-usuario">
        <div class="contenedor-perfil">
            <div class="portada-perfil">
                <div class="sombra"></div>
                <div class="avatar-perfil">
                    <img src="<?= $_SESSION['foto-perfil']['fotoPerfil_Logo']; ?>" alt="foto perfil">
                </div>
                <div class="datos-perfil">
                    <h4 class="titulo-usuario"><?= $usuario['nombres']; ?> <?= $usuario['apellidos']; ?></h4>
                    <p class="bio-usuario"> Correo: <?= $usuario['correoElectronico']; ?></p>
                    <p class="bio-usuario">Celular: <?= $usuario['numeroCelular']; ?></label></p>

                </div>
                <div class="menu-perfil">
                    <ul>
                        <!-- <li><a href="#" title=""><i class="icono-perfil fas fa-info-circle"></i> Informacion</a></li>
                <li><a href="#" title=""><i class="icono-perfil fas fa-camera"></i> Fotos</a></li>-->
                    </ul>
                </div>
            </div>
    </section>
    <footer>
        <?php include('../view/footer.html'); ?>
    </footer>
</body>

</html>