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
            /*if ($reserva['estado'] === 2) {
                $estado = 'Pendiente';
            }*/
        ?>
        <div class="section">
            <div class="parrafo">
                <h1>Barbero <?=$barbero['nombres']; ?>  <?=$barbero['apellidos']; ?></h1>
                <p>Mi nombre es Andres padilla soy reconocido como barbero y estilista con más
                    de 15 años de experiencia en la industria de la barbería.A los 18 años, Juan Carlos inició su
                    carrera como aprendiz en
                    una pequeña barbería de su barrio. Durante ese tiempo, no solo aprendió los secretos del oficio,
                    sino que también
                    desarrolló un enfoque único hacia el cuidado personal masculino.
                    <br>
                    <br><b>si quieres conocer un poco de mi trabajo dale clicl en ver mas..</b>
                </p>
                <br><a href="../view/reserva_cliente_barbero.php?idEmpleado=<?=$barbero['idEmpleado'];?>"><b>Reservar con el profesional..</b></a> <!--Boton para ver sobre el barbero-->
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