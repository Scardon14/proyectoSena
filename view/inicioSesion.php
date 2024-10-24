<html>
    <head>
    <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title> Inicio de Sesion</title>
        <style>
            html {
                 font-size: 16px; /* 1rem = 16px */
                }
            body {
                margin: 0;
                padding: 0;
                font-size: 1rem; /* 16px de base */
                }
            header {
                background-color: #1554b3;
                display: flex;
                align-items: center;
            }
            header div:last-child{
                width: 60%;
                background-color: #1554b3;
            }
            h1{
                margin: 0;
                color: #ffffff;
                font-size: 80px;
                margin-left: 6rem;
            }
            .logo {
                display: flex;
                align-items: center;
                width: 10%;
                border-right: #ffffff 1px solid;
                padding: 0 3rem;
            }
            .logo img{
                width: 100%;
            }
            .formulario-Inicio_de_sesion{
                margin: 0 auto;
                display: flex;
                flex-direction: column;
                align-items: center;
            }
            .formulario-registro form{
                background-color: #d6d6d6;
                padding: 0 10rem;
                margin: 0;
                display: flex;
                flex-direction: column;
            }
            form div input{
                width: 25px;
            }
            input{
                margin-bottom: 10px;
                margin-top: 2px ;
                width: 80%;
            }
            .form-container{
            background-color: #d6d6d6; /* Color gris claro */ 
            width: 40%;
            margin: 0px auto;
            padding: 200px;
            border-radius: 0px;
            box-shadow: 0 0 0px rgba(0, 0, 0, 0.1);
            }
        </style>

       <style>

        #Inicia sesion, #Registrate{
            background-color: blue;
        }

        #Inicia sesion, #Registrate:hover{
            cursor: pointer;

        }
        </style>
            <script>
        // Mostrar el alert si hay un mensaje
        window.onload = function() {
            const mensaje = "<?php echo isset($_GET['mensaje']) ? htmlspecialchars($_GET['mensaje']) : ''; ?>";
            if(mensaje){
                alert(mensaje);
            }
        };
    </script>
    </head>
    <body>

        <header>
            <div class="logo">
                <img src="../img/logo.png" alt="logo">
            </div>
            <div>
                <h1>O & T</h1>
            </div>
        </header>
        <div class="form-container">
        <div class="formulario-inicioSesion">
        <div class="card shadow-lg mt-5" id="form-IniaSsesion">
        <div class="card body">
            <form action="../model/procesarInicioSesion.php" method="post">
                <h2 class="mt-3 mb-3 text-center"InicaSesion></h2>
                <h2>Inicia Sesion</h2>
                <label for="correo o numero de celular">Correo electrónico o Numero de celular</label>
                <input type="text" id="correo o numero de celular" name="correo" placeholder="Ingresa tu correo electronico o Numero de celular">
                <label for="contraseña"><br>contraseña</br></label>
                <input type="password" id="contraseña" placeholder="Ingresa tu contraseña"name="contraseña" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
                <input type="submit" value="Iniciar Sesion">
                <div>
                    <label for="forgot-password">¿Olvidaste tu contraseña?</label><input type="checkbox">
                </div>
            </form> 
        </div>
        </div>
        </div>
        </div>
          
<footer>
    <?php include('../view/footer.html'); ?>
</footer> 
    </body>
</html>