<!DOCTYPE html>
<html lang="en">
 <head>
       <meta charset="UTF-8">
       <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
       <link rel="stylesheet" href="../css/Administrador.css">
       <link rel="js" href="../js/administrador_tabla.js">
       <script type="text/javascript" src="../js/registro.js"></script>
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
                            <li><a href="Administrador.html">Panel de control</a></li>
                        
                            
                        </ul>
                    </nav>
                </div>
           </div>
       </header>
        <!--Tabla de agenda-->
 <section id="vision">
    <div class="cassil">
        <div class="casil"></div>
         <div class="tex">
            
             
        <table class="style-table">
          <thead> 
        <tr>
          <th>Panel de administrador</th>
          <th>Cancerlar</th>
          <th>confirmar</th>

        </tr>
         </thead>
         <tbody>
            <script src="../js/agenda_negocio.js"></script>
        <tr>
            <td>Actuaizar servicios de O&T</td>
           
            <td><button onclick="cancelarCita('Camilo Sanchez')"><i class="fas fa-times"></i></button></td>
            <td><button onclick="confirmarCita('Camilo Sanchez')"><i class="fas fa-check"></i></button></td>
            
        </tr>
        <tr>
            <td>Guardar copia de seguridad</td>
            
            <td><button onclick= "cancelarCita(Abraham Corona)"><i class="fas fa-times"></i></button></td>
            <td><button onclick= "confirmarCita(Abram Corona)"><i class="fas fa-check"></i></button></td>
        </tr>
        <tr>
            <td>inavilitar cuenta</td>
            
            <td><button onclick= "cancelarCita(Cristian Cadena)"><i class="fas fa-times"></i></button></td>
            <td><button onclick= "confirmarCita(Cristian Cadena)"><i class="fas fa-check"></i></button></td>
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
</html