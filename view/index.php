
<!DOCTYPE html>
<html lang="en">
 <head>
       <meta charset="UTF-8">
       <meta name="viewport"
       content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
       <link rel="preconnect" href="https://fonts.googleapis.com">
       <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
       <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
       <title> O & T</title>
       <link rel="preconnect" href="https://fonts.googleapis.com">
       <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
       <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text:ital@0;1&family=Roboto:ital,wght@0,100;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
       <link rel="stylesheet" href="../css/inicio.css">
       <script>
        // Mostrar el alert si hay un mensaje
        window.onload = function() {
            const mensaje = "<?php echo isset($_GET['mensaje']) ? htmlspecialchars($_GET['mensaje']) : ''; ?>";
            if(mensaje){
                alert(mensaje);
            }
        };
    </script>
    </head>
    <Body> 
        <div class="main">
            <header>
                <div class="contenedor-encabezado">  <!--Encabezado Azul-->
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
                            <li><a href="index.php">Inicio</a></li>
                            <li><a href="../model/ProcesarNegocio.php">Regristrate</a></li>
                            <li><a href="inicioSesion.php">Inicia sesion</a></li>
                            <li><a href="quienes_somos.php">Quienes somos?</a></li>
                            </ul>
                        </nav>
                    </div>
            </div>
            </header>
            <section id="presenta">  <!--Seccion de img con titulo-->   
            <h1 class="org">ORGANIZACION Y TIEMPO</h1>
            </section> 
            <section id="organizacion">  <!--Seccion de fondo blanco, img y texto-->
                <div class="casi">
                    <div class="casilla"></div>
                        <div class="texto">
                            <h1> O&T (OrganizacionyTiempo) </h1>
                            <P>Prueba Gratis el software que te ayudara a optimizar tiempo y <br>
                            tu trabajo aumenta tu rentabilidad y automatiza la gestion de agendamiento,<br> 
                            clientes y pagos en un momento.</P>
                            <p>Te ayudaremos a resolver: </p>
                            <nav class="lista">
                                <ol>
                                <li>Elegir la barberia de tu preferencia.</li>
                                <li>Reservar y cancelar citas.</li>
                                <li>Vinculacion de tus barberos.</li>
                                <li>Automatiza las tareas.</li>
                                </ol>
                            </nav>
                        </div>
                </div>
           </div>
            <footer>
                    <?php include('../view/footer.html'); ?>
                </footer> 
            </div>
       </div>
    </Body>
</html>