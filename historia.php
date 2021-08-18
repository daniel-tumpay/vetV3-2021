<?php
$conn = mysqli_connect('database-vet', 'admin', '975334045', 'localperrosdb') or die(mysqli_error($mysqli));

//(nombre de la base de datos, $enlace) mysql_select_db("Relocadb",$link);
//capturando datos
$v1 = $_REQUEST['fechaDiag'];
$v2 = $_REQUEST['diagnostico'];
$v3 = $_REQUEST['descripcion'];
$v4 = $_REQUEST['medicamento'];
$v5 = $_REQUEST['sangre'];
$v6 = $_REQUEST['radio'];
/*$v6 = addslashes(file_get_contents($_FILES['radio']['tmp_name']));*/
$v7 = $_REQUEST['cod'];

//conuslta SQL

$sql = "INSERT INTO historiales (fechaDiag, diagnostico, descripcion, medicamento, sangre, radio, cod) ";
$sql .= "VALUES ('$v1', '$v2', '$v3', '$v4', '$v5', '$v6', $v7 )";
/*/$result = mysqli_query($conn, $sql);
    if(!$result) {//SI NO EXISTE la variable resultado, es decir mi consulta no fue realizada o hecha
        die("Query Failed.");// con esto terminamos la aplicacion 
    }*/

$result = mysqli_query($conn, $sql);
if ($result) {
    echo '
            <script>
                alert("Historial registrado exitosamente");
                window.location = "consultar.php";
            </script>
        ';
} else {
    echo '
            <script>
                alert("Ha ocurrido un error, intentelo nuevamente");
                window.location = "index.php";
            </script>
        ';
}
mysqli_close($conn);
?>