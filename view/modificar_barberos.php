<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/modificar.css">
    <title>Document</title>
</head>
<body>
<section class="formulario">
<h1>Formulario modificacion</h1>
<?php
  session_start();
  $barbero = $_SESSION['barberoActual'];
?>
<form action="../model/actualizarBarbero.php" method="POST">
<div class="registro" hidden>
    <input type="text" class="form-control" id="exampleInputname1" name="idEmpleado" aria-describedby="nameHelp" value="<?=$barbero['idEmpleado']?>"hidden>
  </div>
  <div class="registro">
    <input type="text" class="form-control" id="exampleInputname1" name="nombre" aria-describedby="nameHelp" value="<?=$barbero['nombres']?>">
    <label for="exampleInputName1" class="nombre">Nombres</label>
  </div>
  <div class="registro">
    <input type="text" class="form-control" id="exampleInputLastname1" name="apellido" aria-describedby="lastnameHelp" value="<?=$barbero['apellidos']?>">
    <label for="exampleInputLastname1" class="apellido">Apellidos</label>
  </div>
  <div class="registro">
    <input type="tel" class="form-control" id="exampleInputPhone1" name="Telefono" aria-describedby="phoneHelp">
    <label for="exampleInputPhone1" class="celular">Numero De Celular</label>
  </div>
  <div class="registro">
    <input type="email" class="form-control" id="exampleInputEmail1">
    <label for="exampleInputEmail1" class="correo">Correro Electronico</label>
  </div>
  <div class="aceptar">
    <input type="checkbox" class="caja-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Aceptar cambios</label>
  </div>
  <button class="Boton" type="submit" class="btn btn-primary">Guardar cambios</button>
</form>
</section>
</body>
</html>