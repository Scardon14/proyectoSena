<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../css/mi_perfil_barbero.css">
    <title>Mi perfil</title>
</head>

<body>
    <!--Header-->
    <header>
        <?php include('../view/header.php'); ?>
    </header>
    <section id="perfil">
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
            <label>Contraseña:</label>
            <input type="password" id="contraseñaPerfil" value="<?= $usuario['contraseña']; ?>"><br>

            <div class="galeria">
                <h3>Galeria de Fotos</h3><br>
                <?php
                $fotosTrabajo = $_SESSION['fotos-trabajo'];
                foreach ($fotosTrabajo as $foto) { ?>
                    <div class="foto">
                        <img src="<?= $foto['foto1'] ?>" alt="Foto 1">
                    </div>
                    <div class="foto">
                        <img src="<?= $foto['foto2'] ?>" alt="Foto 2">
                    </div>
                    <div class="foto">
                        <img src="<?= $foto['foto3'] ?>" alt="Foto 3">
                    </div>
                    <div class="foto">
                        <img src="<?= $foto['foto4'] ?>" alt="Foto 4">
                    </div>
                    <div class="foto">
                        <img src="<?= $foto['foto5'] ?>" alt="Foto 5">
                    </div>
                <?php } ?>
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