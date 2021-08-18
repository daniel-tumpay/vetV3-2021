
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


<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/styleConsultar.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
            echo " </br>Codigo : " . $row["Codigo"];
            echo " </br>Nombre : " . $row["Nombre"];
            echo " </br>Raza : " . $row["Raza"];
            echo " </br>Genero : " . $row["Genero"];
            echo " </br>Nacio en : " . $row["FechaNac"];
            echo '</br><img class="rounded" src="data:image/jpeg;base64,'.base64_encode( $row['Foto'] ).'" style="height:100px;width:100px";/>';
            echo "</p>";
        }
    ?>
    </div>

    <div class="botones">
        <Input name= "Registrar" class="btn" Type = Submit value = "Imprimir" onclick="javascript:window.print()" >
        <Input Type = Submit class="btn" value = "Volver" onClick="history.go(-1)">
        <a class='btn btn-primary' role='button' href='historialmedico.php?Codigo=<?=$row['Codigo']?> '>Historial</a>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>