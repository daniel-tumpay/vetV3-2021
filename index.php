<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleLogin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap">
    <script src="https://kit.fontawesome.com/44a1776457.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Login</title>
</head>

<body>
    <header>
        <nav>
            <a href="#">Volver a página Principal</a>
        </nav>
        <section class="textos-header">
            <h1 class="animate__animated animate__wobble">Bienvenidos, usuarios</h1>
            <h2 class="animate__animated animate__backInLeft">Doggytos</h2>
        </section>
        <div class="ola" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C377.82,146.53 274.54,88.31 501.41,47.86 L500.00,150.00 L0.00,150.00 Z"
                    style="stroke: none; fill: #ffffff;"></path>
            </svg></div>
    </header>


    <div class="wrapper">
        <div class="container">

            <div class="signup">Crear Cuenta</div>
            <div class="login">Iniciar Sesión</div>

            <div class="signup-form">
                <form action="Registrar_vet.php" method="GET">
                    <div class="input">
                        <input name="Correo" type="text" class="input-content" required pattern="^.{4,20}$" placeholder="Tu dirección email"><br />                     
                        <input name="Usuario" type="text" class="input-content" required pattern="[A-Za-z0-9]{5,40}" placeholder="Elige un nombre de usuario"><br />
                        <input name="Contrasena" type="password" class="input-content" required pattern="^.{4,20}$" placeholder="Elige una contraseña"><br />
            </div>
                    <div class="boton">
                        <input type="submit" class="btn" value="Crear una Cuenta">
                    </div>
                </form>
            </div>

            <div class="login-form">
                <form action="validar_usuario.php" method="GET">
                    <div class="input">
                        <input name="Correo" type="text" class="input-content" required pattern="^.{4,20}$" placeholder="Email o Nombre de usuario"><br />
                        <input name="Contrasena" type="password" class="input-content" required pattern="^.{4,20}$" placeholder="Contraseña"><br />
                    </div>
                    <div class="boton">
                        <input type="submit" class="btn" value="Log in">
                    </div>
                    <span><a href="#">Olvidé mi usuario o contraseña</a></span>
                </form>
            </div>

        </div>
    </div>







    <!-- By Coding Market -->
    <div class="youtube">
        <a href="https://api.whatsapp.com/send?phone=+51990730995" target="_blank">Soporte</a>
    </div>
</body>
<script src="js/login.js"></script>

</html>