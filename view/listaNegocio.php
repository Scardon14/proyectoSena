<!DOCTYPE html>
<html lang="en">
 <head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content= "IE=edge">
       <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
       <link rel="preconnect" href="https://fonts.googleapis.com">
       <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
       <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
       <link rel="stylesheet" href="../css/listadonegocio.css">
       <title> Administrador</title>
</head>
<Body>
<div class="main">
        <!--Header-->
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
                            <li><a href="administrador2.php">Listado de Cliente</a></li>
                            <li><a href="listaBarberos.php">Listado de Barberos</a></li>
                            <li><a href="listaNegocio.php">Listado de Negocio</a></li>
                            <li><a href="">Cerrar sesion</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
     <h1 class= "text-center p-3"> ADMINISTRACION</h1> <!-- Titulo visto en la pagina-->
    <div class= "container-fluid row">
    <div class="text-center p-5">
    <table class="table">    <!-- Fila de titulos-->
    <thead class="p-3 mb-2 bg-danger">
      <tr class="p-3 mb-2 bg-danger">
          <th scope="col">idNergocio</th>
          <th scope="col">NOMBRE DEL ESTABLECIMIENTO</th>
          <th scope="col">NUMERO CELULAR</th>
          <th scope="col">CORREO ELECTRONICO</th>
          <th scope="col">DIRECCION</th>
          <th scope="col">NIT</th>
          <th scope="col">FECHA DE CREACION</th>
          <th scope="col">ESTADO</th>
      </tr>
   </thead>
   <tbody>
    <?php
    session_start();
    $listanegocios=$_SESSION['listaNegocios'];
    foreach($listanegocios as $negocio){
    ?>
    
    <tr>   <!-- Fila de datos de la persona-->
      <td><?= $negocio['idNegocio'];?></td>
      <td><?= $negocio['nombreEstablecimiento'];?></td>
      <td><?= $negocio['numeroCelular'];?></td>
      <td><?= $negocio['correoElectronico'];?></td>
      <td><?= $negocio['direccion'];?></td>
      <td><?= $negocio['nit'];?></td>
      <td><?= $negocio['fechaCreacion'];?></td>
      <td><?= $negocio['estado'];?></td>
      <td>
              <a href="../model/actualizarNegocio.php?id=<?= $negocio['idNegocio']; ?>"
                class="btn btn-small btn-success"><i class="bi bi-pencil-square">Editar</i></a>
                <!--Boton editar-->
               <form action="../model/eliminarNegocio.php" method="POST">
                       <div class="idNegocio" hidden>
                                <input type="text" class="form-control" id="exampleInputname1" name="idNegocio"
                                aria-describedby="nameHelp" value="<?= $negocio['idNegocio'] ?>" hidden>
                       </div>
                                <button type="submit" class="btn btn-small btn-danger"><i
                                 class="bi bi-trash3-fill">Eliminar</i></button> <!-- Boton eliminar-->
               </form>
      </td>
    </tr>
    <?php
    }
    ?>
  </tbody>
  </table>
    </div>
    </div>


<!--Java script-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</Body>

</html>  

