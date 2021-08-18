<?php
$conn = mysqli_connect('database-vet', 'admin', '975334045', 'localperrosdb') or die(mysqli_error($mysqli));

//(nombre de la base de datos, $enlace) mysql_select_db("Relocadb",$link);
//capturando datos
$v1 = $_REQUEST['Codigo'];
$v2 = $_REQUEST['Nombre'];
$v3 = $_REQUEST['Raza'];
$v4 = $_REQUEST['FechaNac'];
$v5 = $_REQUEST['Genero'];
$v6 = $_REQUEST['Foto'];
/*$v6= addslashes(file_get_contents($_FILES['Foto']['tmp_name'])); Visualizar foto */
//conuslta SQL
$sql = "INSERT INTO perros (Codigo, Nombre, Raza, FechaNac, Genero, Foto) ";
$sql .= "VALUES ('$v1', '$v2', '$v3', '$v4', '$v5', '$v6' )";
/*/$result = mysqli_query($conn, $sql);
    if(!$result) {//SI NO EXISTE la variable resultado, es decir mi consulta no fue realizada o hecha
        die("Query Failed.");// con esto terminamos la aplicacion 
    }*/

$result = mysqli_query($conn, $sql);
if ($result) {
    echo '
            <script>
                alert("Canino registrado exitosamente");
                window.location = "welcome.php";
            </script>
        ';
} else {
    echo '
            <script>
                alert("Ha ocurrido un error, intentelo nuevamente");
                window.location = "index.html";
            </script>
        ';
}
?>