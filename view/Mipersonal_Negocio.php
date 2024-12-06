<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mi Personal</title>
    <link rel="stylesheet" href="../css/barberos_usuario.css">
</head>
<header>
    <?php include('../view/header.php'); ?>
</header>
<Body>
    <section id="presenta">
        <?php
        $barberos = $_SESSION['barberos'];
        $usuario = $_SESSION["usuarioLogueado"];
        foreach ($barberos as $barbero) {
        ?>
        <div class="section">
            <div class="parrafo">
                <h1>Barbero <?=$barbero['nombres']; ?>  <?=$barbero['apellidos']; ?></h1>
                <p>
                    <br>
                    
                </p>
                <?php
                if($usuario['idPerfil'] === 3 || $usuario['idPerfil'] === '3'){
                    ?>
                    <p id="agendarParrafo" > <br><b >Si deseas agendar con el barbero, da click aquí</b> </p>
                    
                <br><a id="button"  href="../view/reserva_cliente_barbero.php?idEmpleado=<?=$barbero['idEmpleado'];?>"><b>Reservar con el profesional..</b></a> <!--Boton para ver sobre el barbero-->
                <?php
                }?>
                </div>
            <img src="<?=$barbero['fotoPerfil_Logo']; ?>" alt="Logo">
        </div>
        <?php
            }
        ?>
    </section>

    <footer>
        <?php include('../view/footer.html'); ?>
    </footer>
    </div>
</Body>

</html>