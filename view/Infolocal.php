<!DOCTYPE html>
<html lang="en">
 <head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content = "width=device-width", initiañ-scale=1.0>
       <link rel="preconnect" href="https://fonts.googleapis.com">
       <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
       <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
       <title> O & T</title>
       <link rel="preconnect" href="https://fonts.googleapis.com">
       <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
       <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text:ital@0;1&family=Roboto:ital,wght@0,100;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
       <link rel="stylesheet" href="../css/infolocal.css">
    </head>
    <Body> 
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
                         <li><a href="index_usuario.php">Inicio</a></li>
                         <li><a href="LocalesUsuario.php">Locales</a></li>
                         <li><a href="miperfil_usuario.php">Mi perfil</a></li>
                         <li><a href="quienessomos.php">¿Quienes somos?</a></li>
                        </ul>
                    </nav>
                </div>
           </div>
       </header>
       <section id="presenta">
        <div class="casi">
          <div class="casti">
             <div class="casilla"></div>
             <div class="texto">
                 <h1> Barbería El Arte del Corte</h1>
                 <p>Ubicada en el corazón de la ciudad, El Arte del Corte es mucho más que una barbería; es un espacio donde el estilo y la tradición se encuentran. Con un ambiente moderno y acogedor, ofrecemos una experiencia personalizada que combina técnicas clásicas con tendencias actuales.
                    Nuestros barberos profesionales cuentan con años de experiencia, comprometidos con la excelencia en cada detalle, desde un simple corte hasta un afeitado de precisión. Utilizamos productos de alta calidad para garantizar que tu cabello y barba reciban el mejor cuidado.
                    Relájate en nuestros sillones de cuero mientras disfrutas de una bebida de cortesía, buena música y un servicio de primera. Ya sea que busques un estilo clásico o algo más moderno y atrevido, en El Arte del Corte estamos listos para ayudarte a lucir tu mejor versión.
                    
                   <br> <b>Servicios destacados:</b>
                    
                    <br>Cortes de cabello personalizados.
                    <br> con navaja y toalla caliente.
                    <br>Arreglo y perfilado de barba.
                    <br>Tratamientos capilares.

                    <br><b>Horarios de atención:</b>
                    <br>Lunes a viernes: 10:00 AM - 8:00 PM
                    <br>Sábados: 9:00 AM - 6:00 PM
                    <br>Domingos: Cerrado.
                    
                   <br> Ven y vive la experiencia El Arte del Corte, donde cada cliente es único y cada corte es una obra de arte.
                   <br>
                   <br> <b>Si quieres agendar tu cita conoce los barberos que tenemos en nuestro local y agenda tu cita con alguno de ellos, dale clic al boton de Ver Barberos</b>
                    
                    </p>
                <div class="ovely">
                <br><a href="barberos_Usuarios.html">Ver Barberos</a>  <!--Boton para ver los barberos-->
                </div>
             </div>
            </div>
       </div>
       </section>
       <footer>
            <?php include('../view/footer.html'); ?>
        </footer> 
    </Body>
</html>