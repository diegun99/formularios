<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formulario</title>
    <link href="https://fonts.googleapis.com/css?family=Proza+Libre" rel="stylesheet">

    <link rel="stylesheet" href="css/estilos.css" media="screen" title="no title">
  </head>
  <body>

    <div class="contenedor">

      <h1>Obteniendo información</h1>


      <?php


      if (isset($_POST['nombre']) && trim($_POST['nombre'])) {
        $nombre = $_POST['nombre'];
        echo "nombre: ".$nombre;
      }else{

        echo "no se ha recibido el nombre";
      }

      ?>

      <?php
      if (isset($_POST['apellido']) && trim($_POST['apellido'])) {
        $apellido = $_POST['apellido'];
        echo "apellido: ".$apellido;
      }else{

        echo "no se ha recibido el apellido";
      }
      ?>

      <hr>

      <h2>Validar Checkbox</h2>
      <?php

      if (isset($_POST['notificaciones'])) {
        echo $_POST['notificaciones'];
      }else{
        echo "no se ha marcado la casilla"
      }
      ?>


      <pre>
      <?php
        var_dump($_POST);

      ?>
      
      </pre>

      <pre>
      <?php echo var_dump($_POST); ?>
      </pre>

    </div>




  </body>
</html>
