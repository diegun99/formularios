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
      <h1>Validando Formulario PHP</h1>

        <div class="contenido">

          <form action="respuesta.php" method="post">

            <fieldset>
              <legend>Información Personal</legend>
              <label for="nombre">Nombre
                <input type="text" name="nombre" id="nombre">
              </label>
              
              <label for="apellido">Apellido
                <input type="text" name="apellido" id="apellido">
              </label>
              <hr>
              <!-- Desde un checkbox-->
    
              <label for="notificaciones">Recibir notificaciones
                <input type="checkbox" name="notificaciones" id="notificaciones">
              </label>
            </fieldset> 

            <!-- Desde array de Checkboxes-->
            <fieldset>

              <legend>Tecnologías</legend>
              <label for="html5">HTML5
                <input type="checkbox" name="tecno[]" value="html5" id="html5">
              </label>

              <label for="css3">CSS3
                  <input type="checkbox" name="tecno[]" value="css3" id="css3">
              </label>

              <label for="php">PHP
                <input type="checkbox" name="tecno[]" value="php" id="php">
              </label>
                            
            </fieldset>
            <!--Desde select (menú desplegable)-->
            <fieldset>
              <legend>Área de Interés</legend>

              <select name="area">
                <option value="">- Selecciona una area -</option>
                <option value="fe">Frontend</option>
                <option value="be">Backend</option>
                <option value="fs">FullStack</option>
              </select>
            </fieldset>
            <!--Desde radiobuttons-->
            <fieldset>

              <legend>Modalidad</legend>
                <label for="pres">Presencial
                  <input type='radio' id='pres' name="opciones" value='presencial'>
                </label>  
                <label for="vir">Virtual
                  <input type='radio' id='vir' name="opciones" value='virtual'>
                </label>
                
            </fieldset>
            <!--Desde textarea-->
            <fieldset>

              <legend>Comentarios:</legend>
                <label for="mensaje"> Mensaje <br/>
                  <textarea name="mensaje" rows="8" cols="40" id="mensaje"></textarea>
                </label>

            </fieldset>
            <!--Botones-->
            <fieldset>
              <input name="envio" type="submit">
              <input type="reset">
            </fieldset>
          </form>


        </div>
    </div>




  </body>
</html>
