<!DOCTYPE html>
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
</head>
<body>
    <?php
    session_start();
    if($_SESSION['usuarioLogueado'] == null){
        header("Location: ./index.php");
    } $usuario=$_SESSION['usuarioLogueado']
    ?>
    <header>
        <div class="contenedor-encabezado"> <!--Encabezado Azul-->
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
                        <?php 
                        if ($usuario['idPerfil']=== '3' || $usuario['idPerfil']=== 3){?>
                            <li><a href="../view/index_usuario.php">Inicio</a></li>
                         <!--<li><a href="../view/LocalesUsuario.php">Locales</a></li>-->
                         <li><a href="../model/ProcesarFotoPerfil.php?idPerfil=<?=$usuario['idPerfil'];?>&idUsuario=<?=$usuario['idUsuario'];?>">Mi perfil</a></li>
                         <!--<li><a href="../view/historial_citas_usuario.php">Historial</a></li>-->
                         <li><a href="../model/ProcesarReservaCliente.php?idCliente=<?= $usuario['idCliente'];?>">Reservas</a></li>
                         <li><a href="../model/procesarInicioSesion.php">Cerrar Sesión</a></li>
                        <?php
                        }else if($usuario['idPerfil']=== '2' || $usuario['idPerfil'] === 2){?>
                            <li><a href="../view/index_barbero.php">Inicio</a></li>
                            <li><a href="./agenda_barbero.php">Mi Agenda</a></li>
                            <li><a href="../model/ProcesarFotoPerfil.php?idPerfil=<?=$usuario['idPerfil'];?>&idUsuario=<?=$usuario['idUsuario'];?>">Mi perfil</a></li>
                            <!--<li><a href="../view/historial_citas.php">Historial Citas</a></li>-->
                            <li><a href="../model/procesarInicioSesion.php">Cerrar Sesión</a></li>
                            <?php
                        }else if($usuario['idPerfil'] === '1'|| $usuario['idPerfil'] === 1){?>
                            <li><a href="../view/index_negocio.php">Inicio</a></li>
                            <li><a href="../model/ProcesarFotoPerfil.php?idPerfil=<?=$usuario['idPerfil'];?>&idUsuario=<?=$usuario['idUsuario'];?>&idNegocio=<?=$usuario['idNegocio'];?>">Mi barberia</a></li>
                            <li><a href="../model/ProcesarReservaBarbero.php?idNegocio=<?= $usuario['idNegocio'];?>&idCliente=<?= $usuario['idEmpleado'];?>">Mi personal</a></li>
                            <li><a href="../model/procesarInicioSesion.php">Cerrar Sesión</a></li>
                        <?php
                        }                        
                        ?>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
</body>
    </html>