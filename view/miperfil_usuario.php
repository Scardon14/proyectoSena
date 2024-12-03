<!DOCTYPE html>
<html lang="en">
 <head>
       <link rel="stylesheet" href="../css/perfil_usuario.css">
       <title>Mi Perfil</title>
    </head>
    <Body> 
   <!--Header-->
   <header>
        <?php include('../view/header.php'); ?>
    </header>
<section class="perfil-usuario">
    <div class="contenedor-perfil">
        <div class="portada-perfil" >
            <div class="sombra"></div>
            <div class="avatar-perfil">
                <img src="../img/Chico5.png" alt="">
                <a href="#" class="cambiar-foto">
                    <i class="fas fa-camera"></i> 
                    <span>Cambiar foto</span>
                </a>
            </div>
            <div class="datos-perfil">
                <h4 class="titulo-usuario">Matias Andres Guerrero</h4>
                <p class="bio-usuario">Hola soy Matias tengo 22 años, soy una persona dedicada y perseverante. Desde pequeño, he sido 
                    responsable y comprometido. Me registre en esta pagina porque me gusta tener siempre mi corte de pelo perfecto,
                    Y gracias a O&T, cuido mi belleza.
                </p>

            </div>
            <div class="opcciones-perfil">
                <button type="">Cambiar portada</button>
            </div>
        </div>
        <div class="menu-perfil">
            <ul>
                <li><a href="#" title=""><i class="icono-perfil fas fa-info-circle"></i> Informacion</a></li>
                <li><a href="#" title=""><i class="icono-perfil fas fa-camera"></i> Fotos</a></li>
            </ul>
        </div>
    </div>
</section>
<footer>
            <?php include('../view/footer.html'); ?>
        </footer> 
</body>
</html>