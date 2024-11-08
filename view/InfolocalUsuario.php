<!DOCTYPE html>
<html lang="en">
 <head>
       <meta charset="UTF-8">
       <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
       <link rel="stylesheet" href="../css/info_negocio.css">
       <script src="../js/Info_negocio.css"></script>
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
                        </ul>
                    </nav>
                </div>
           </div>
       </header>
       <section id="presenta">  <!--Seccion de img con titulo-->   
       <h1 class="org">Style</h1>
       <img src="../img/logo 2.png" id="logo2">
       </section> 
       
       <section id="organizacion">  <!--Seccion de fondo blanco, img y texto-->
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
                <div class="text-al" >
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
       <section id= "fotos">
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
                     <div class="ovely">
                     <br><a href="#">Agendar Cita</a>  <!--Boton para ver los barberos-->
                </div> 
                </div> 
          </div>
       </section>
        <footer>
            <?php include('../view/footer.html'); ?>
        </footer> 
       </div>
    </Body>
</html>