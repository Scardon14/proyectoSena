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
       <link rel="stylesheet" href="../css/historial.css">
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
                         <li><a href="../view/index_usuario.php">Inicio</a></li>
                         <li><a href="../view/LocalesUsuario.php">Locales</a></li>
                         <li><a href="../view/miPerfil_usuario.php">Mi perfil</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
     <h1 class= "text-center p-3">HISTORIAL</h1> <!-- Titulo visto en la pagina-->
    <div>
    <div>
    <table class="estilo-tabla" style="text-align:center;">    <!-- Fila de titulos-->
    <thead>
      <tr>
          <th scope="col">idCliente</th>
          <th scope="col">NOMBRES</th>
          <th scope="col">APELLIDOS</th>
          <th scope="col">NUMERO CELULAR</th>
          <th scope="col">CORREO ELECTRONICO</th>
          <th scope="col">idUsuario</th>
          <th scope="col">FECHA DE CREACION</th>
          <th scope="col">ESTADO</th>
      </tr>
   </thead>
   <tbody>
    
    <tr>   <!-- Fila de datos de la persona-->
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><td>
      <td></td>
      <td></td>
      <td>
         <a href="" class="btn btn-small btn-success"><i class="bi bi-pencil-square">Editar</i></a>  <!--Boton editar-->
         <a href="" class="btn btn-small btn-danger"><i class="bi bi-trash3-fill">Eliminar</i></a>   <!-- Boton eliminar-->
      </td>
    </tr>
    
  </tbody>
  </table>
    </div>
    </div>


<!--Java script-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</Body>

</html>  