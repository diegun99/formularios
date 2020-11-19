
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


      
      <?php  if (isset($_POST['nombre']) && trim($_POST['nombre'])) {
          $nombre = $_POST['nombre'];
          echo "nombre: ".$nombre;
        }else{

          echo "no se ha recibido el nombre";
        }


      

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
          $seleccion = $_POST['notificaciones'];
          if ($seleccion=='on') {
              echo "se ha suscrito a nuestras notificaciones";
          }
        }else{
          echo "no se ha marcado la casilla";
        }
        
      ?>

      <hr>

      <hr>

      <?php
        if (isset($_POST['tecno'])) {

            $tecnologias = $_POST['tecno'];
            echo "Usted ha seleccionado: <br>";
            foreach($tecnologias as $tecnologia):
                echo "=>".$tecnologia;
                echo"<br>";


            endforeach;
        }else{
            echo "no existe";

        }

      ?>

      <?php
        if (isset($_POST['area']) && $_POST['area']!="") {
            $area= $_POST['area'];
            switch ($area) {
                case 'fe':
                    echo "usted selecciono frontend";
                    break;
                case 'be':
                    echo "usted selecciono backend";
                    break;
                case 'fs':
                 echo "usted selecciono fullstack";
                    break;
                    
                
                default:
                    echo "opcion no valida";
                    break;
            }
        }else{
            echo "no seleccione area de interes";
        }

      ?>

      <hr>

      <?php

      if (isset($_POST['opciones'])) {
          $opcion = $_POST['opciones'];
          echo "la modalidad es: ".$opcion;
      }else{
          echo "Usted no selecciono modalidad";
      }

      ?>

      <hr>

      <?php

        if (isset($_POST['mensaje']) && trim($_POST['mensaje'])) {
          #seguridad 
            $mensaje = filter_var( $_POST['mensaje'],FILTER_SANITIZE_STRING);
            echo "mensaje recibido: ".$mensaje;
        }else{
            echo "no hay mensaje";
        }

        ?>

       


      <pre>
      <?php
          var_dump($_POST);

      ?>
      


    </div>




  </body>
</html>