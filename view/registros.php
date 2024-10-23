<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="../css/registro.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="../js/registro.js"></script>
    <title>Registrarse</title>
</head>

<body>
    <div class="main">
        <header>
            <div class="logo">
                <img src="../img/logo.png" alt="logo">
            </div>
            <div>
                <h1> O & T </h1>
            </div>
        </header>

        <div class="formulario-registro-main" id="formulario">
            <div class="contenedor-seleccion-perfil">
                <select name="opcionRegistro" id="opcionRegistro">
                    <option value="registroUsuario">Registrarse como Usuario</option>
                    <option value="registroBarbero">Registrarse como Barbero</option>
                    <option value="registroNegocio">Registrarse como Negocio</option>
                </select>
                <button id="registrarse" onclick="mostrarForm()">Seleccionar Rol</button>
            </div>
            <div class="contenedor-formularios">
            <!-- FORMULARIO REGISTRO USUARIO -->
            <div class="formulario-registro ocultarDiv" id="registroUsuario">
                <form action="../model/ProcesarUsuario.php" method="post">
                    <h2>Registro Usuario</h2>
                    <!-- NOMBRE -->

                    <div class="formulario_grupo" id="grupo_nombre">
                        <label for="nombre" class="formulario_label">Nombres</label>
                        <div class="formulario_grupo-input">
                            <input type="text" class="formulario_input" name="nombre" id="nombre" placeholder="Pepito"
                                required>
                            <i class="formulario_validacion-estado fa fa-times-circle"></i>
                        </div>
                        <p class="formulario_input-error">El nombre tiene que ser de 3 a 16 dígitos y
                            solo puede contener letras.</p>
                    </div>

                    <!-- APELLIDO -->

                    <div class="formulario_grupo" id="grupo_apellido">
                        <label for="apellido" class="formulario_label">Apellidos</label>
                        <div class="formulario_grupo-input">
                            <input type="text" class="formulario_input" name="apellido" id="apellido"
                                placeholder="Perez" required>
                            <i class="formulario_validacion-estado fa fa-times-circle"></i>
                        </div>
                        <p class="formulario_input-error">El apellido tiene que ser de 3 a 16 dígitos y
                            solo puede contener letras.</p>
                    </div>

                    <!-- CELULAR -->

                    <div class="formulario_grupo" id="grupo_celular">
                        <label for="celular" class="formulario_label">Número Celular</label>
                        <div class="formulario_grupo-input">
                            <input type="number" class="formulario_input" name="celular" id="celular"
                                placeholder="3123456789" required>
                            <i class="formulario_validacion-estado fa fa-times-circle"></i>
                        </div>
                        <p class="formulario_input-error">El celular solo puede contener
                            números y 10 digitos.</p>
                    </div>

                    <!-- CORREO -->

                    <div class="formulario_grupo" id="grupo_correo">
                        <label for="correo" class="formulario_label"> Correo Electrónico </label>
                        <div class="formulario_grupo-input">
                            <input type="email" class="formulario_input" name="correo" id="correo"
                                placeholder="ejemplo123@ejemplo.com" required>
                            <i class="formulario_validacion-estado fa fa-times-circle"></i>
                        </div>
                        <p class="formulario_input-error">Correo incorrecto.</p>
                    </div>
                    <!-- FOTO DE PERFIL -->
                    <label> Foto de perfil </label>
                    <input type="file" required>
                    <!-- CONTRASEÑA1 -->
                    <div class="formulario_grupo" id="grupo_contraseña">
                        <label for="contraseña1" class="formulario_label">Contraseña.</label>
                        <div class="contenedorContraseña">
                            <div class="formulario_grupo-input">
                                <input type="password" class="formulario_input" name="contraseña1" id="contraseña"
                                    placeholder="Digite una Contraseña" required>
                                <img src="../img/closeEye.png" id="verContraseña" class="icon" onclick="pass(0)">
                                <img src="../img/borrarCestaBasura.png" id="borrarContraseña" class="icon"
                                    onclick="borrar(0)">
                                <i class="formulario_validacion-estado fa fa-times-circle"></i>
                            </div>
                            <p class="formulario_input-error">La contraseña tiene que ser de 8 a 15 dígitos.</p>
                        </div>
                    </div>
                    <!-- CONTRASEÑA2 -->
                    <div class="formulario_grupo" id="grupo_contraseña">
                        <label for="contraseña2" class="formulario_label">Confirme la contraseña creada</label>
                        <div class="contenedorContraseña">
                            <div class="formulario_grupo-input">
                                <input type="password" class="formulario_input" name="contraseña2" id="contraseña"
                                    placeholder="Contraseña" required>
                                <img src="../img/closeEye.png" id="verContraseña" class="icon" onclick="pass(1)">
                                <img src="../img/borrarCestaBasura.png" id="borrarContraseña" class="icon"
                                    onclick="borrar(1)">
                                <i class="formulario_validacion-estado fa fa-times-circle"></i>
                            </div>
                            <p class="formulario_input-error">Las contraseñas no coinciden.</p>
                        </div>
                    </div>
                    <!-- TERMINOS Y CONDICIONES-->
                    <div class="formulario_grupo" id="grupo_terminos">
                        <label class="formulario_label"><strong>Acepto los términos y
                                condiciones de O&T.com<br>y autorizo el tratamiento de mis datos
                                personales</strong></label>
                        <input class="formulario_checkbox" type="checkbox" name="terminos" id="terminos">

                        <p> <i class="fa fa-exclamation-triangle"></i> Debes aceptar los términos y
                            condiciones. </p>
                    </div>
                    <!-- ERROR RELLENE TODOS LOS CAMPOS DEL FORMULARIO-->
                    <input type="submit" id="btn-registar" value="Registrarse">
                </form>
            </div>

            <!-- FORMULARIO REGISTRO BARBERO -->
            <div class="formulario-registro ocultarDiv" id="registroBarbero">
                <form action="../model/ProcesarBarbero.php" method="post">
                    <h2>Registro Barbero</h2>
                    <!-- NOMBRE -->
                    <div class="formulario_grupo" id="grupo_nombre">
                        <label for="nombre" class="formulario_label">Nombres</label>
                        <div class="formulario_grupo-input">
                            <input type="text" class="formulario_input" name="nombre" id="nombre" placeholder="Pepito"
                                required>
                            <i class="formulario_validacion-estado fa fa-times-circle"></i>
                        </div>
                        <div>
                            <p class="formulario_input-error">El nombre tiene que ser de 3 a 16 dígitos y
                                solo puede contener letras.</p>
                        </div>
                    </div>

                    <!-- APELLIDO -->

                    <div class="formulario_grupo" id="grupo_apellido">
                        <label for="apellido" class="formulario_label">Apellidos</label>
                        <div class="formulario_grupo-input">
                            <input type="text" class="formulario_input" name="apellido" id="apellido"
                                placeholder="Perez" required>
                            <i class="formulario_validacion-estado fa fa-times-circle"></i>
                        </div>
                        <p class="formulario_input-error">El apellido tiene que ser de 3 a 16 dígitos y
                            solo puede contener letras.</p>
                    </div>

                    <!-- CELULAR -->

                    <div class="formulario_grupo" id="grupo_celular">
                        <label for="celular" class="formulario_label">Número Celular</label>
                        <div class="formulario_grupo-input">
                            <input type="number" class="formulario_input" name="celular" id="celular"
                                placeholder="3123456789" required>
                            <i class="formulario_validacion-estado fa fa-times-circle"></i>
                        </div>
                        <p class="formulario_input-error">El celular solo puede contener
                            números y 10 digitos.</p>
                    </div>

                    <!-- CORREO -->

                    <div class="formulario_grupo" id="grupo_correo">
                        <label for="correo" class="formulario_label"> Correo Electrónico </label>
                        <div class="formulario_grupo-input">
                            <input type="email" class="formulario_input" name="correo" id="correo"
                                placeholder="ejemplo123@ejemplo.com" required>
                            <i class="formulario_validacion-estado fa fa-times-circle"></i>
                        </div>
                        <p class="formulario_input-error">Correo incorrecto.</p>
                    </div>
                    <!-- FOTO DE PERFIL -->
                    <label> Foto de perfil </label>
                    <input type="file" required>
                    <label> Fotografías <small>(5 min. De los servicios que haz
                            prestado como Barbero)</small></label>
                    <input type="file" required>
                    <!-- CONTRASEÑA1 -->
                    <div class="formulario_grupo" id="grupo_contraseña">
                        <label for="contraseña1" class="formulario_label">Contraseña.</label>
                        <div class="contenedorContraseña">
                            <div class="formulario_grupo-input">
                                <input type="password" class="formulario_input" name="contraseña1" id="contraseña"
                                    placeholder="Digite una Contraseña" required>
                                <img src="../img/closeEye.png" id="verContraseña" class="icon" onclick="pass(2)">
                                <img src="../img/borrarCestaBasura.png" id="borrarContraseña" class="icon"
                                    onclick="borrar(2)">
                                <i class="formulario_validacion-estado fa fa-times-circle"></i>
                            </div>
                            <p class="formulario_input-error">La contraseña tiene que ser de 8 a 15 dígitos.</p>
                        </div>
                    </div>
                    <!-- CONTRASEÑA2 -->
                    <div class="formulario_grupo" id="grupo_contraseña">
                        <label for="contraseña2" class="formulario_label">Confirme la contraseña creada</label>
                        <div class="contenedorContraseña">
                            <div class="formulario_grupo-input">
                                <input type="password" class="formulario_input" name="contraseña2" id="contraseña"
                                    placeholder="Contraseña" required>
                                <img src="../img/closeEye.png" id="verContraseña" class="icon" onclick="pass(3)">
                                <img src="../img/borrarCestaBasura.png" id="borrarContraseña" class="icon"
                                    onclick="borrar(3)">
                                <i class="formulario_validacion-estado fa fa-times-circle"></i>
                            </div>
                            <p class="formulario_input-error">La contraseña tiene que ser de 8 a 15 dígitos.</p>
                        </div>
                    </div>
                    <!-- TERMINOS Y CONDICIONES-->
                    <div class="formulario_grupo" id="grupo_terminos">
                        <label class="formulario_label"><strong>Acepto los términos y
                                condiciones de O&T.com<br>y autorizo el tratamiento de mis datos
                                personales</strong></label>
                        <input class="formulario_checkbox" type="checkbox" name="terminos" id="terminos">
                        <p> <i class="fa fa-exclamation-triangle"></i> Debes aceptar los términos y
                            condiciones. </p>

                    </div>
                    <!-- ERROR RELLENE TODOS LOS CAMPOS DEL FORMULARIO-->


                    <input type="submit" id="btn-registar" value="Registrarse">
                </form>
            </div>

            <!-- FORMULARIO REGISTRO NEGOCIO -->
            <!-- NOMBRE -->
            <div class="formulario-registro ocultarDiv" id="registroNegocio">
                <h2>Registro Negocio</h2>
                <form action="#">

                    <div class="formulario_grupo" id="grupo_nombre">
                        <label for="nombre" class="formulario_label">Nombre del Establecimiento</label>
                        <div class="formulario_grupo-input">
                            <input type="text" class="formulario_input" name="nombre" id="nombre" placeholder="Pepito"
                                required>
                            <i class="formulario_validacion-estado fa fa-times-circle"></i>
                        </div>
                        <p class="formulario_input-error">El nombre del establecimiento tiene que ser de 4 a 16 dígitos
                            y
                            solo puede contener letras.</p>
                    </div>

                    <!-- NIT -->

                    <div class="formulario_grupo" id="grupo_nit">
                        <label for="apellido" class="formulario_label">NIT</label>
                        <div class="formulario_grupo-input">
                            <input type="number" class="formulario_input" name="nit" id="nit"
                                placeholder="NIT del establecimiento" required>
                            <i class="formulario_validacion-estado fa fa-times-circle"></i>
                        </div>
                        <p class="formulario_input-error">El NIT tiene que ser de 9 dígitos y
                            solo puede contener números.</p>
                    </div>

                    <!-- CELULAR -->

                    <div class="formulario_grupo" id="grupo_celular">
                        <label for="celular" class="formulario_label">Número Celular</label>
                        <div class="formulario_grupo-input">
                            <input type="number" class="formulario_input" name="celular" id="celular"
                                placeholder="3123456789" required>
                            <i class="formulario_validacion-estado fa fa-times-circle"></i>
                        </div>
                        <p class="formulario_input-error">El celular solo puede contener
                            números y 10 digitos.</p>
                    </div>

                    <!-- CORREO -->

                    <div class="formulario_grupo" id="grupo_correo">
                        <label for="correo" class="formulario_label"> Correo Electrónico </label>
                        <div class="formulario_grupo-input">
                            <input type="email" class="formulario_input" name="correo" id="correo"
                                placeholder="ejemplo123@ejemplo.com" required>
                            <i class="formulario_validacion-estado fa fa-times-circle"></i>
                        </div>
                        <p class="formulario_input-error">Correo incorrecto.</p>
                    </div>

                    <!-- DIRECCION -->
                    <div class="formulario_grupo" id="grupo_dirección">
                        <label for="direccion" class="formulario_label">Dirección</label>
                        <div class="formulario_grupo-input">
                            <input type="text" class="formulario_input" name="direccion" id="direccion"
                                placeholder="calle 49a sur #92a-60" required>
                            <i class="formulario_validacion-estado fa fa-times-circle"></i>
                        </div>
                        <p class="formulario_input-error">Dirección incorrecta.</p>
                    </div>

                    <!-- FOTO DE PERFIL -->

                    <label> Foto de perfil o logo del establecimiento </label>
                    <input type="file" required>
                    <label> Fotografías del Establecimiento <small>(5 min. Por dentro y su fachada)</small></label>
                    <input type="file" required>

                    <!-- CONTRASEÑA1 -->
                    <div class="formulario_grupo" id="grupo_contraseña">
                        <label for="contraseña1" class="formulario_label">Contraseña.</label>
                        <div class="contenedorContraseña">
                            <div class="formulario_grupo-input">
                                <input type="password" class="formulario_input" name="contraseña1" id="contraseña"
                                    placeholder="Digite una Contraseña" required>
                                <img src="../img/closeEye.png" id="verContraseña" class="icon" onclick="pass(4)">
                                <img src="../img/borrarCestaBasura.png" id="borrarContraseña" class="icon"
                                    onclick="borrar(4)">
                                <i class="formulario_validacion-estado fa fa-times-circle"></i>
                            </div>
                            <p class="formulario_input-error">La contraseña tiene que ser de 8 a 15 dígitos.</p>
                        </div>
                    </div>
                    <!-- CONTRASEÑA2 -->
                    <div class="formulario_grupo" id="grupo_contraseña">
                        <label for="contraseña2" class="formulario_label">Confirme la contraseña creada</label>
                        <div class="contenedorContraseña">
                            <div class="formulario_grupo-input">
                                <input type="password" class="formulario_input" name="contraseña2" id="contraseña"
                                    placeholder="Contraseña" required>
                                <img src="../img/closeEye.png" id="verContraseña" class="icon" onclick="pass(5)">
                                <img src="../img/borrarCestaBasura.png" id="borrarContraseña" class="icon"
                                    onclick="borrar(5)">
                                <i class="formulario_validacion-estado fa fa-times-circle"></i>
                            </div>
                            <p class="formulario_input-error">La contraseña tiene que ser de 8 a 15 dígitos.</p>
                        </div>
                    </div>
                    <!-- TERMINOS Y CONDICIONES-->

                    <div class="formulario_grupo" id="grupo_terminos">
                        <label class="formulario_label"><strong>Acepto los términos y
                                condiciones de O&T.com<br>y autorizo el tratamiento de mis datos
                                personales</strong></label>
                        <input class="formulario_checkbox" type="checkbox" name="terminos" id="terminos">
                        <p> <i class="fa fa-exclamation-triangle"></i>Debes aceptar los términos y
                            condiciones. </p>
                    </div>
                    <input type="submit" id="btn-registar" value="Registrarse">
                </form>
            </div>
            </div>

            <button id="btnVolver">Volver</button>
        </div>
         <!-- FOOTER -->
        <footer>
            <?php include('../view/footer.html'); ?>
        </footer>       
</body>
</div>

</html>