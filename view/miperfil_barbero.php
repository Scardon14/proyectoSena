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

<body>
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
                        <li><a href="historial_citas.php">Historial Citas</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <section id="perfil">
        <div id="fotoPerfil"></div>
        <div class="nombreBarbero">
            <h2>Andres Padilla</h2>
        </div>

        <div class="infoPerfil">
            <label>Información</label><br>
            <label>Correo: andresPadilla@gmail.com</label><br>
            <label>Celular: 3215648790</label><br>
            <label>Contraseña: </label>
            <input type="password" id="contraseñaPerfil" value="********" /><br>
            <label>Precio del Corte: $ </label>
            <input type="text" id="precio" value="" /><br>
            <label>Galeria</label><br>
        </div>
        <script>
            function guardarCambios() {
                const nuevaPassword = document.getElementById('contraseñaPerfil').value;
                const nuevoPrecio = document.getElementById('precio').value;

                // Aquí puedes hacer una llamada a tu backend (PHP, Node.js, etc.) para actualizar los valores en la base de datos.
                console.log("Nueva contraseña: " + nuevaPassword);
                console.log("Nuevo precio: " + nuevoPrecio);

                alert('Los cambios han sido guardados.');
            }
        </script>

        <!-- Botón para guardar cambios -->
        <button onclick="guardarCambios()">Guardar Cambios</button>
    </section>
    <footer>
        <?php include('../view/footer.html'); ?>
    </footer>
</body>

</html>