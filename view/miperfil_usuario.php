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
       <link rel="stylesheet" href="../css/Perfil_usuario.css">
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
                <ul class="lista-perfil">
                    <li>35 Seguidores</li>
                    <li>7 Seguidos</li>
                    <li>32 Publicaciones</li>
                </ul>
            </div>
            <div class="opcciones-perfil">
                <button type="">Cambiar portada</button>
            </div>
        </div>
        <div class="menu-perfil">
            <ul>
                <li><a href="#" title=""><i class="icono-perfil fas fa-bullhorn"></i> Publicaciones</a></li>
                <li><a href="#" title=""><i class="icono-perfil fas fa-info-circle"></i> Informacion</a></li>
                <li><a href="#" title=""><i class="icono-perfil fas fa-grin"></i> Amigos 43</a></li>
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