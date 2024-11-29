<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mi Barberia</title>
    <link rel="stylesheet" href="../css/mi_barberia_negocio.css">
    <script src="../js/mibarberia_negocio.js"></script>
</head>
<Body>
    <header>
        <?php include('../view/header.php'); ?>
    </header>
    <section id="presenta"> <!--Seccion de img con titulo-->
        <h1 class="org">Style</h1>
        <img src="../img/logo 2.png" id="logo2">
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
                                <th>Precios</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Corte Tradicional</td>
                                <td>$15.00</td>
                            </tr>
                            <tr>
                                <td>Corte diseños sencillos</td>
                                <td>$20.00</td>
                            </tr>
                            <tr>
                                <td>Corte diseños complejos</td>
                                <td>$30.000</td>
                            </tr>
                            <tr>
                                <td>Corte Barba</td>
                                <td>$20.000</td>
                            </tr>
                            <tr>
                                <td>Tinte</td>
                                <td>$40.000</td>
                            </tr>
                            <tr>
                                <td>Cejas</td>
                                <td>$15.000</td>
                            </tr>
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
        <script src="script.js"></script>
        <footer>
            <?php include('../view/footer.html'); ?>
        </footer>
        </div>
</Body>

</html>