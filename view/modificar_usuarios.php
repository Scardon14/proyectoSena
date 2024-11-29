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
<form>
  <div class="nombres">
    <label for="exampleInputName1" class="nombre">Nombres</label>
    <input type="text" class="form-control" id="exampleInputname1" aria-describedby="nameHelp">
  </div>
  <div class="apellidos">
    <label for="exampleInputLastname1" class="apellido">Apellidos</label>
    <input type="text" class="form-control" id="exampleInputLastname1" aria-describedby="lastnameHelp">
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
    <label for="exampleInputState1" class="estado">Estado</label>
    <input type="number" class="state" id="exampleInputState1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="caja-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</body>
</html>