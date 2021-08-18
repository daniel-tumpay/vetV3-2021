<?php
    
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
    <link rel="stylesheet" href="css/styleConsultar.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet">
    
    <title>Vet-Consultas</title>
</head>
<body>
    
    <header>
        <nav>
            <a href="welcome.php">Volver a Registrar</a>
        </nav>
        <section class="textos-header">
            <h1>Veterinary Clinic</h1>
            <h2>Consultar</h2>
        </section>
    </header>
    
    
    
    
    <section class="contenedor consultar"></section>
        <div class="content-consultar"> 
            <form action="ejemplo.php" method="GET">
                <h2>Nombre a buscar</h2> 
                <div class="busqueda">
                    <Input Type = Text name = "Nombre" >
                        <br />
                        <br />
                    <div class="botonBuscar">
                    <input Type = "Submit" value = "Buscar">
                    <input Type = "button" value = "Volver" onClick="history.go(-1);">
                    </div>
                </div>
            </form>
        </div>  
    </section>
</body>
</html>