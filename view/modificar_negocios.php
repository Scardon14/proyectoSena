<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
  session_start();
  $negocio = $_SESSION['negocioActual'];
?>
<form action="../model/actualizarNegocio.php" method="POST">
   <div class="idEmpleado" hidden>
      <input type="text" class="form-control" id="exampleInputname1" name="idEmpleado" aria-describedby="nameHelp"
        value="<?= $barbero['idEmpleado'] ?>" hidden>
    </div>
  <div class="nombres">
    <label for="exampleInputName1" class="nombre">Nombre Del Establecimiento</label>
    <input type="text" class="form-control" id="exampleInputname1" name="nombreNegocio" aria-describedby="nameHelp" value="<?= $negocio['nombreNegocio']?>">
  </div>
  <div class="apellidos">
    <label for="exampleInputLastname1" class="apellido">Apellidos</label>
    <input type="text" class="form-control" id="exampleInputLastname1" name="apellido" aria-describedby="lastnameHelp" value="<?= $negocio['apellidos']?>">
  </div>
  <div class="numeros">
    <label for="exampleInputPhone1" class="celular">Numero De Celular</label>
    <input type="tel" class="form-control" id="exampleInputPhone1" aria-describedby="phoneHelp">
  </div>
  <div class="correos">
    <label for="exampleInputEmail1" class="correo">Correro Electronico</label>
    <input type="email" class="form-control" id="exampleInputEmail1">
  </div>
  <div class="estados">
      <label for="lang">Estado</label>
      <select name="estados" id="lang">
        <option value="activo">1</option>
        <option value="inactivo">2</option>
      </select>
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="caja-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</body>
</html>