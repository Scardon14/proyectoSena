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
       <link rel="stylesheet" href="../css/quienesSomos_negocio.css">
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
                         <li><a href="localesnegocio.php">Locales</a></li>
                            <li><a href="agenda_negocio.php">Agenda</a></li>
                            <li><a href="mipersonal_negocio.php">Mi personal</a></li>
                            <li><a href="mibarberia_negocio.php">Mi barberia</a></li>
                            <li><a href="quienessomos_negocio.php">¿Quienes somos?</a></li>
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
                    <h1> Somos style(Estilo) </h1>
                    <P> style tiene como objetivo ofrecer servicios de barbería de alta calidad, adaptados a las tendencias actuales y a las preferencias individuales de nuestros clientes, garantizando una experiencia única y satisfactoria que fomente la lealtad y el bienestar personal.
          </div>
       </section>
       <section id="mision">
        <div class="cassi">
            <div class="casill"></div>
             <div class="text">
                 <h1> Mision style </h1>
                 <P>Brindar servicios de barbería de alta calidad, combinando tradición y estilo moderno, en un ambiente acogedor y profesional. Nos enfocamos en ofrecer una experiencia personalizada que resalte la imagen y confianza de cada cliente, asegurando su satisfacción a través de un servicio excepcional, productos de primera y atención al detalle.
             </div>
       </div>
       </section>
       <section id="vision">
        <div class="cassil">
            <div class="casil"></div>
             <div class="tex">
                 <h1> Vision style </h1>
                 <P>Ser reconocidos como la barbería de referencia en la comunidad, destacándonos por nuestra innovación, profesionalismo y compromiso con la satisfacción del cliente. Buscamos expandirnos y posicionarnos como un referente en el cuidado personal masculino, estableciendo un estándar de excelencia en servicios de barbería que inspire confianza y fidelidad.
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