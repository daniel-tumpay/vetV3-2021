<?php
$conn = mysqli_connect('database-vet', 'admin', '975334045', 'localperrosdb') or die(mysqli_error($mysqli));

$v11 = $_REQUEST['Correo'];
$v12 = $_REQUEST['Usuario'];
$v13 = $_REQUEST['Contrasena'];
$v13 = hash('sha512',$v13);


$sql = "INSERT INTO veterinarios (Correo, Usuario, Contrasena) ";
$sql .= "VALUES ('$v11', '$v12', '$v13' )";

//Verifica que el correo no se repita en la base de datos
$verificar_correo = mysqli_query($conn, "SELECT * FROM veterinarios WHERE Correo='$v11' ");

    if(mysqli_num_rows($verificar_correo) > 0){
        echo '
            <script>
                alert("Este correo ya está en uso, pruebe con otro diferente.");
                window.location = "index.html";
            </script>
        ';
        exit();
    }

//verifica que el nombre de usuario no se repita en la base de datos
$verificar_usuario = mysqli_query($conn, "SELECT * FROM veterinarios WHERE Usuario='$v12' ");

    if(mysqli_num_rows($verificar_usuario) > 0){
        echo '
            <script>
                alert("Este usuario ya está en uso, pruebe con otro diferente.");
                window.location = "index.php";
            </script>
        ';
        exit();
    }

$result = mysqli_query($conn, $sql);
    if($result) {
        echo '
            <script>
                alert("Usuario registrado exitosamente");
                window.location = "Registrar_perro.php";
            </script>
        ';
    }else{
        echo '
            <script>
                alert("Ha ocurrido un error, intentelo nuevamente");
                window.location = "index.php";
            </script>
        ';
    }
?>