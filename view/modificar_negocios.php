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
<section class="formulario">
<h1>Formulario modificacion</h1>
<?php
  session_start();
  $negocio = $_SESSION['negocioActual'];
?>
<form action="../model/actualizarNegocio.php" method="POST">
   <div class="registro" hidden>
      <input type="text" class="form-control" id="exampleInputname1" name="idNegocio" aria-describedby="nameHelp" value="<?= $negocio['idNegocio'] ?>" hidden>
    </div>
  <div class="registro">
    <label for="exampleInputName1" class="nombre">Nombre Del Establecimiento</label>
    <input type="text" class="form-control" id="exampleInputname1" name="nombreEstablecimiento" aria-describedby="nameHelp" value="<?= $negocio['nombreEstablecimiento']?>">
  </div>
  <div class="registro">
    <label for="exampleInputLastname1" class="celular">Numero Celular</label>
    <input type="tel" class="form-control" id="exampleInputLastname1" name="numeroCelular" aria-describedby="lastnameHelp" value="<?= $negocio['numeroCelular']?>">
  </div>
  <div class="registro">
    <label for="exampleInputName1" class="direccion">Direccion</label>
    <input type="text" class="form-control" id="exampleInputname1" name="direccion" aria-describedby="nameHelp" value="<?= $negocio['direccion']?>">
  </div>
  <div class="registro">
    <label for="exampleInputName1" class="nit">Direccion</label>
    <input type="number" class="form-control" id="exampleInputname1" name="nit" aria-describedby="nameHelp" value="<?= $negocio['nit']?>">
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