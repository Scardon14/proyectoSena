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
  $cliente = $_SESSION['clienteActual'];
  ?>
  <form action="../model/actualizarCliente.php" method="POST">
    <div class="idCliente" hidden>
      <input type="text" class="form-control" id="exampleInputname1" name="idCliente" aria-describedby="nameHelp"
        value="<?= $cliente['idCliente'] ?>" hidden>
    </div>
    <div class="registro">
      <label for="exampleInputName1" class="nombre">Nombres</label>
      <input type="text" class="form-control" id="exampleInputname1" name="nombre" aria-describedby="nameHelp"
        value="<?= $cliente['nombres'] ?>">
    </div>
    <div class="registro">
      <label for="exampleInputLastname1" class="apellido">Apellidos</label>
      <input type="text" class="form-control" id="exampleInputLastname1" name="apellido" aria-describedby="lastnameHelp"
        value="<?= $cliente['apellidos'] ?>">
    </div>
    <div class="registro">
      <label for="exampleInputPhone1" class="celular">Numero De Celular</label>
      <input type="tel" class="form-control" id="exampleInputPhone1" name="numeroCelular" aria-describedby="phoneHelp" value="<?= $cliente['numeroCelular'] ?>">
    </div>
    <div class="aceptar">
      <input type="checkbox" class="caja-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Aceptar Cambios</label>
    </div>
    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
  </form>
</section>
</body>

</html>