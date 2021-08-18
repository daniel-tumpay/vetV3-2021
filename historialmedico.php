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
    <title>Historial Medico</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/styleHistorialMedico.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    </br>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Fecha y Hora</th>
                <th scope="col">Acción</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $codigo = $_REQUEST['Codigo'];
            echo "</br>Código: $codigo";
            $busqueda = "SELECT * FROM historiales AS h INNER JOIN perros AS p ON h.cod = p.Codigo WHERE h.cod = $codigo";

            $conn = mysqli_connect('database-vet', 'admin', '975334045', 'localperrosdb') or die(mysqli_error($mysqli));

            $result = mysqli_query($conn, $busqueda);

            if (mysqli_num_rows($result) > 0) {
                for ($i = 0; $i < mysqli_num_rows($result); $i++) {
                    $row = mysqli_fetch_array($result);
                    echo "<tr>";
                    echo  "<td>" . ($i+1) . "</td>";
                    echo  "<td>" . $row['fechaDiag'] . "</td>";
                    echo "<td> <a class='btn btn-success' role='button' href='consultar_historia.php?Codigo=".$row['Codigo']." &fecha=".$row['fechaDiag']." '>Consultar</a> </td>";
                    echo " </tr>";
                }
            }
            ?>
        </tbody>
    </table>

    <a class='btn btn-primary' role='button' href='registro_historia.php'>Registrar Historial</a>
    <Input Type = Submit class="btn btn-danger" role='button' value = "Volver" onClick="history.go(-1)">       

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>