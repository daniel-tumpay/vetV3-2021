<?php
    session_start();

    $conn = mysqli_connect('database-vet', 'admin', '975334045', 'localperrosdb') or die(mysqli_error($mysqli));

    $v1 = $_REQUEST['Correo'];
    $v2 = $_REQUEST['Contrasena'];
    $v2 = hash('sha512',$v2);

    $validar_user = mysqli_query($conn, "SELECT * FROM veterinarios WHERE Correo='$v1' and Contrasena='$v2' ");

    if(mysqli_num_rows($validar_user) > 0){
        $_SESSION['Correo'] = $v1;
        header("location: welcome.php");
    }
    else{
        echo '
            <script>
                alert("No se ha podido encontrar tu Usuario.");
                window.location = "index.php";
            </script>
        ';
        exit();
    }



?>