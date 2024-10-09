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
       <link rel="stylesheet" href="../css/infobarbero.css">
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
                 <h1> Barbero Andres Padilla</h1>
                 <p>El barbero es un profesional especializado en el cuidado y mantenimiento del cabello, la barba y, 
                    en algunos casos, de la piel de los hombres. 
                    <br>Su labor incluye una variedad de servicios, tales como:
                    <br>
                    <br>1. Corte de cabello: El barbero ofrece diferentes tipos de cortes, adaptados al estilo y preferencias 
                    del cliente. Utiliza tijeras, máquinas y navajas para lograr el corte deseado, cuidando los detalles de 
                    forma, longitud y acabado.
                    
                    <br>2. Afeitado y perfilado de barba: Los barberos son expertos en el uso de navajas y máquinas para afeitar, 
                    recortar o perfilar la barba y el bigote, asegurándose de dar una forma definida y elegante. También aplican 
                    productos específicos como aceites, espumas y lociones para suavizar el proceso.
                    
                    <br>3. Estilismo y peinado: Además del corte, el barbero asesora a sus clientes sobre cómo peinar su cabello 
                    o barba, y les ofrece productos para mantener el estilo, como pomadas, ceras o geles.
                    
                    <br>4. Cuidado de la piel: En algunas barberías, el barbero ofrece tratamientos faciales rápidos como mascarillas
                     o exfoliaciones, así como el uso de toallas calientes para abrir los poros antes del afeitado.
                    
                    <br>5. Asesoramiento: El barbero también juega un papel importante como consejero en cuanto a estilos y tendencias.
                     Escucha los deseos del cliente y sugiere cortes o tratamientos que puedan mejorar su apariencia y comodidad.
                    
                    <br>6. Higiene y seguridad: Mantiene altos estándares de higiene, desinfectando herramientas y áreas de trabajo, 
                    y a menudo sigue normas sanitarias rigurosas para garantizar la seguridad del cliente.
                    <br>
                    <br><b>Si quieres agendar tu cita dale clic al boton de Agendar Cita</b>
                    </p>
                <div class="ovely">
                <br><a href="#">Agendar Cita</a>  <!--Boton para ver los barberos-->
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