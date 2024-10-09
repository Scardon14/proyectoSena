<!DOCTYPE html>
<html lang="en">
 <head>
       <meta charset="UTF-8">
       <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" href="../css/agenda_negocio.css">
       <link rel="js" href="../js/agenda_negocio.js">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
                <div class="search"> 
                    <input type="search" placeholder="¿Que deseas buscar?">
                </div>
            </div>
           <div class="contenedor_menu"> <!--Encabezado rojo-->
                <div class="menu">
                    <nav>
                        <ul>
                            <li><a href="indexnegocio.php">Inicio</a></li>
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

 <!--Tabla de precio de servicios-->
 <section id="vision">
    <div class="cassil">
        <div class="casil"></div>
         <div class="tex">
             <h1> Historial de servicios </h1>
             
        <table class="style-table">
          <thead> 
        <tr>
          <th>Nombre de barbero</th>
          <th>Hora cita</th>
          <th>Cancerlar</th>
          <th>confirmar</th>
        </tr>
         </thead>
         <tbody>
            <script src="../js/agenda_negocio.js"></script>
        <tr>
            <td>Camilo Sanchez</td>
            <td>2:00pm</td>
            <td><button onclick="cancelarCita('Camilo Sanchez')"><i class="fas fa-times"></i></button></td>
            <td><button onclick="confirmarCita('Camilo Sanchez')"><i class="fas fa-check"></i></button></td>
            
        </tr>
        <tr>
            <td>Abraham Corona</td>
            <td>2:00pm</td>
            <td><button onclick= "cancelarCita(Abraham Corona)"><i class="fas fa-times"></i></button></td>
            <td><button onclick= "confirmarCita(Abram Corona)"><i class="fas fa-check"></i></button></td>
        </tr>
        <tr>
            <td>Cristian Cadena</td>
            <td>8:00am</td>
            <td><button onclick= "cancelarCita(Cristian Cadena)"><i class="fas fa-times"></i></button></td>
            <td><button onclick= "confirmarCita(Cristian Cadena)"><i class="fas fa-check"></i></button></td>
        </tr>
        <tr>
            <td>Alejandro Franco</td>
            <td>10:00am</td>
            <td><button onclick= "cancelarCita(Alejandro Franco)"><i class="fas fa-times"></i></button></td>
            <td><button onclick= "confirmarCita(Alejandro Franco)"><i class="fas fa-check"></i></button></td>
        </tr>
        <tr>
            <td>Andrea Villa</td>
            <td>4:00pm</td>
            <td><button onclick= "cancelarCita(Andrea villa)"><i class="fas fa-times"></i></button></td>
            <td><button onclick= "confirmarCita(Andrea villa)"><i class="fas fa-check"></i></button></td>
        </tr>
        <tr>
            <td>Saul Sanchez</td>
            <td>6:00pm</td>
            <td><button onclick= "cancelarCita(Saul Sanchez)"><i class="fas fa-times"></i></button></td>
            <td><button onclick= "confirmarCita(Saul Sanchez)"><i class="fas fa-check"></i></button></td>
        </tr>
         </tbody>
       </table>
       </div>
   </div>
   </section> 

   <footer>
            <?php include('../view/footer.html'); ?>
        </footer> 
</div>
</Body>
</html>