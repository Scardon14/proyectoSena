<!DOCTYPE html>
<html lang="en">
 <head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
       <link rel="preconnect" href="https://fonts.googleapis.com">
       <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
       <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
       <title> O & T</title>
       <link rel="preconnect" href="https://fonts.googleapis.com">
       <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
       <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text:ital@0;1&family=Roboto:ital,wght@0,100;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
       <link rel="stylesheet" href="../css/quienes_somos.css">
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
                         <li><a href="index.php">Inicio</a></li>
                         <li><a href="registros.php">Regristrate</a></li>
                         <li><a href="inicioSesion.php">Inicia sesion</a></li>
                         <li><a href="quienessomos.php">Quienes somos?</a></li>
                        </ul>
                    </nav>
                </div>
           </div>
       </header>
       <section id="presenta">  <!--Seccion de img con titulo-->   
       <h1 class="org">Quienes somos?</h1>
       </section> 
       <section id="organizacion">  <!--Seccion de fondo blanco, img y texto-->
          <div class="casi">
               <div class="casilla"></div>
                <div class="texto">
                    <h1> Somos O&T (OrganizacionyTiempo) </h1>
                    <P>En cuanto a el objetivo del aplicativo O & T es dar una solución integral y eficiente para la gestión de turnos de barbería, optimizar el tiempo tanto para barberos como para clientes. A través de esta plataforma, buscamos facilitar la organización de horarios para los barberos, permitiendo la publicación de disponibilidad y la gestión de vínculos con cuentas de negocios. Y así mismo brindar a los clientes la capacidad de agendar y cancelar citas desde la comodidad de sus hogares, reduciendo el tiempo de espera en la barbería y mejorando la experiencia de servicio para todos los involucrados
                </div>
          </div>
       </section>
       <section id="mision">
        <div class="cassi">
            <div class="casill"></div>
             <div class="text">
                 <h1> Mision O&T </h1>
                 <P>Facilitar la gestión de citas y horarios para barberos y usuarios, mejorando la eficiencia y comodidad del servicio. Ofrecer una plataforma intuitiva que permita a los establecimientos promocionarse y optimizar su visibilidad a través de nuestra página web.
             </div>
       </div>
       </section>
       <section id="vision">
        <div class="cassil">
            <div class="casil"></div>
             <div class="tex">
                 <h1> Vision O&T </h1>
                 <P>Convertirnos en la plataforma líder en la gestión de servicios para barberos y establecimientos de belleza, proporcionando soluciones digitales que impulsen el crecimiento del sector y mejoren la experiencia del usuario.
             </div>
       </div>
       </section>
       <div>
        <footer>
            <?php include('../view/footer.html'); ?>
        </footer> 
       </div>
    </Body>
</html>