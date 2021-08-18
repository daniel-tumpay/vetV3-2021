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
  <title>Registro de Historia</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/styleRegistro_historia.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.css">
  <script src="https://kit.fontawesome.com/44a1776457.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
</head>

<body>
  <form action="historia.php" method="GET">
  <div class="form-group">
    <h1>Historial Medico</h1>
  </div>
  </br>
  </br>
    <div class="form-group">
      FECHA
      <span class="col-md-1 col-md-offset-2 text-center"><i class="fas fa-calendar-times"></i></span>
      <div class='input-group date' id='datetimepicker1'>
        <input type="datetime_local" name="fechaDiag" class="form-control" value='<?php date_default_timezone_set("America/Lima"); echo date('Y-m-d h:i:s');?>' />
        <span class="input-group-addon">
          <span class="glyphicon glyphicon-calendar"></span>
        </span>
      </div>
    </div>


    <div class="form-group">
      DIAGNOSTICO
      <span class="col-md-1 col-md-offset-2 text-center"><i class="fas fa-diagnoses"></i></i></span>
      <div class="col-md-8">
        <textarea name="diagnostico" class="form-control" placeholder="¿Cuál es su diagnostico?" rows="3"></textarea>
      </div>
    </div>

    <div class="form-group">
      DESCRIPCION
      <span class="col-md-1 col-md-offset-2 text-center"><i class="fas fa-edit"></i></span>
      <div class="col-md-8">
        <textarea class="form-control" name="descripcion" placeholder="Descripción" rows="7"></textarea>
      </div>
    </div>

    <div class="form-group">
      MEDICAMENTOS
      <span class="col-md-1 col-md-offset-2 text-center"><i class="fas fa-prescription-bottle-alt"></i></span>
      <div class="col-md-12">
        <textarea class="form-control" name="medicamento" placeholder="Medicamentos" rows="3 "></textarea>
      </div>
    </div>

    <div class="form-group">
      TIPO DE SANGRE
      <span class="col-md-1 col-md-offset-2 text-center"><i class="fas fa-tint"></i></span>
      <div class="col-md-8">
        <textarea class="form-control" name="sangre" placeholder="Tipo de Sangre" rows="1"></textarea>
      </div>
    </div>


    <div class="form-group">
      RADIOGRAFÍA
      <span class="col-md-1 col-md-offset-2 text-center"><i class="fas fa-images"></i></span>
      <input type="file" name="radio" class="form-control" >
    </div>

    <div class="form-group">
      CODIGO
      <span class="col-md-1 col-md-offset-2 text-center"><i class="fas fa-prescription-bottle-alt"></i></span>
      <div class="col-md-12">
        <textarea class="form-control" name="cod" placeholder="Codigo" rows="1 "></textarea>
      </div>
    </div>

    <div class="form-group">
      <span class="col-md-1 col-md-offset-2 text-center"><i class="fas fa-save"></i></span>
      <button type="submit" class="btn btn-primary">Guardar Historial</button>
    </div>
    <!--  
    <div class="form-group">
      <span class="col-md-1 col-md-offset-2 text-center"><i class="fas fa-chevron-circle-left"></i></span>
        
    </div> -->
    
  </form>

</body>

</html>