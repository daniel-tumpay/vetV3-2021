<?php
    $conn = mysqli_connect('database-vet', 'admin', '975334045', 'localperrosdb') or die(mysqli_error($mysqli));

    session_start();

    if(!isset($_SESSION['Correo'])){
        echo '
            <script>
                alert("Inicie sesión primero");
                window.location = "index.php";
            </script>
        ';
        //header("location: index.html");
        session_destroy();
        die();
    }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleWelcome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap">
    <title>Bienvenido</title>
</head>
<body>
    <header>
        <nav>
            <a href="consultar.php">Consultar</a>
            <a href="cerrar_sesion.php">Cerrar Sesion</a>
            <div class="username">
                <h1>Bienvenido <p><?=$_SESSION['Correo'] ?></p></h1>
            </div>
        </nav>
        <section class="textos-header">
            <h1 class="animate__animated animate__slideInDown">Veterinaria</h1>
            <h2 class="animate__animated animate__slideInDown">Doggytos</h2>
        </section>
        <div class="ola" style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C377.82,146.53 274.54,88.31 501.41,47.86 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #ffffff;"></path></svg></div>
    </header>


    <main>
    <section class="contenedor registro">
        <h2 class="animate__animated animate__flipInY">Registre a su canino aquí</h2>
        <div class="content-datos"> 
            <form action="Registrar_perro.php" method="GET">

            <div class="contenido-texto">
            <h2>Codigo</h2> 
            <Input name = "Codigo" type="text" maxlength="4">
            </div>

            <div class="contenido-texto">
            <h2>Ingresar Nombre</h2>
            <Input name = "Nombre" type="text">
            </div>

            <div class="contenido-texto">
            <h2>Fecha de Nacimiento</h2>
            <Input name= "FechaNac" type="date">
            </div>
                
            <div class="contenido-texto">
            <h2>Género</h2>
                <div class="gen">
                    <Input name="Genero" Type = "Radio" Value="Macho">
                    <label for="">Macho</label>  
                    <Input name="Genero" Type = "Radio" Value="Hembra"> 
                    <label for="">Hembra</label> 
                </div>
            </div>

            <div class="contenido-texto">
                <h2>Seleccione Raza</h2>
                <Select name = "Raza" class="combobox">
                    <Option value = "Pitbull"> Pitbull
                    <Option value = "Bulldog"> Bulldog
                    <Option value = "Shichu"> Shichu
                    <Option value = "Pequines"> Pequines
                    <Option value = "San Bernardo"> San Bernardo
                    <Option value = "Chiguahua"> Chiguahua
                </Select>
            </div>

            <div class="contenido-texto">
                <h2>Subir Foto</h2> 
                <Input Type = "file" name = "Foto" >
                <!--<button Type = "file" name = "Foto" id="boton">Foto</button>-->
            </div>

            <div class="botones">
                <Input name= "Registrar" class="btn" Type = Submit value = "Registrar">
                <Input Type = Submit class="btn" value = "Cancelar">
            </div>
            </form>
        </div>  
    </section>
    </main>
</body>
</html>