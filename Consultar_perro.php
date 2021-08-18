<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleConsultar.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap">
    <title>Consultas</title>
</head>

<body>
    <?php
    $conn = mysqli_connect('database-vet', 'admin', '975334045', 'localperrosdb') or die(mysqli_error($mysqli));



    //capturando datos
    $v2 = $_REQUEST['Nombre'];
    //conuslta SQL
    $sql = "select * from perros where Nombre like '" . $v2 . "'";
    $result = mysqli_query($conn, $sql);
    //cuantos reultados hay en la busqueda
    
    ?>
    <div class=contenedorphp>
    <?php
        $num_resultados = mysqli_num_rows($result);
        echo "<p>Número de perros encontrados: " . $num_resultados . "</p>";
        //mostrando informacion de los perros y detalle
        for ($i = 0; $i < $num_resultados; $i++) {
            $row = mysqli_fetch_array($result); //echo ($i+1);
            echo " Codigo : " . $row["Codigo"];
            echo " </br>Nombre : " . $row["Nombre"];
            echo " </br>Raza : " . $row["Raza"];
            echo " </br>Genero : " . $row["Genero"];
            echo " </br>Nacio en : " . $row["FechaNac"];
            echo "</p>";
        }
    ?>
    </div>

    <div class="botones">
        <Input name= "Registrar" class="btn" Type = Submit value = "Imprimir" onclick="javascript:window.print()" >
        <Input Type = Submit class="btn" value = "Volver" onClick="history.go(-1)">
        <Input name= "Historial" class="btn" Type = Submit value = "Historial Médico">
    </div>
</body>

</html>