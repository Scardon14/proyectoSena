<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text:ital@0;1&family=Roboto:ital,wght@0,100;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/miperfil_barbero.css">
    <title> O & T</title>
</head>

<Body>
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
                        <li><a href="index_barbero.php">Inicio</a></li>
                        <li><a href="agenda_barbero.php">Mi Agenda</a></li>
                        <li><a href="miperfil_barbero.php">Mi perfil</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <section id="perfil">
        <div class="contenedorFoto">
            <div class="fotoPerfil"></div>
        </div>
        <div class="nombreBarbero">
            <h2>Andres Padilla</h2>
        </div>
        </section>
        <div class="infoPerfil">
        <label>Información</label><br>
        <label>Correo</label><br>
        <label>Celular</label><br>
        <label>Contraseña</label><br>
        <label>Precios</label><br>
        <label>Galeria</label><br>
        </div>
    <footer>
        <?php include('../view/footer.html'); ?>
    </footer>
</Body>

</html>