<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formulario Fotografia</title>
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

              <label for="tipo">Tipo de Documento<br>

              <!--Desde select (menú desplegable)-->
              <select name="tipo" id="tipo" required>
                <option value="">- Selecciona tipo de documento -</option>
                <option value="cc">Cedula de ciudadania</option>
                <option value="ti">Tarjeta de identidad</option>
                <option value="ce">Cedula de extranjeria</option>
              </select>

              </label>
              <br>

              <label for="documento">Documento
                <input type="text" name="documento" id="documento" required>
              </label>

              <br>

              <label for="nombre">Nombre
                <input type="text" name="nombre" id="nombre" required>
              </label>

              <br>
              <br>
              
              <label for="apellido">Apellido
                <input type="text" name="apellido" id="apellido" required>
              </label>

              <label for="telefono">Teléfono
                <input type="text" name="telefono" id="telefono" required>
              </label>

              <hr>
                <!--Desde select (menú desplegable)-->
                            <label for="ciudad">Ciudad<br>

              <select name="ciudad" id="ciudad" required>
                <option value="">- Seleccione ciudad-</option>
                <option value="mo">Mogotes</option>
                <option value="sg">San Gil</option>
                <option value="onz">Onzaga</option>
                <option value="bari">Barichara</option>
                <option value="oca">Ocamonte</option>
                <option value="sj">San Joaquin</option>
                <option value="oi">Oiba</option>
              </select>

              </label>

            <!-- check boxes-->
            <fieldset>

              <legend>Fotografía</legend>
              <label for="retrato">Retrato
                <input type="checkbox" name="foto[]" value="retrato" id="retrato">
              </label>

              <label for="paisaje">Paisaje
                  <input type="checkbox" name="foto[]" value="paisaje" id="paisaje">
              </label>

              <label for="interiores">Interiores
                <input type="checkbox" name="foto[]" value="interiores" id="interiores">
              </label>

              <label for="macro">Macro
                <input type="checkbox" name="foto[]" value="macro" id="macro">
              </label>
                            
            </fieldset>
            <!--Desde select (menú desplegable)-->
            <fieldset>
              <legend>Area</legend> 

              <select name="area" required>
                <option value="">- Selecciona una area -</option>
                <option value="foto">Fotografo</option>
                <option value="ev">Editor de video</option>
                <option value="da">Director de arte</option>
                <option value="asis">asistente</option>
              </select>
            </fieldset>
            <!--Desde radiobuttons-->
            <fieldset>

              <legend>Tipo de Camara</legend>
                <label for="nikon">Nikon
                  <input type='radio' id='pres' name="tipocam" value='nikon' required>
                </label>  
                <label for="sony">Sony
                  <input type='radio' id='vir' name="tipocam" value='sony' required>
                </label>

                <label for="canon">Canon
                  <input type='radio' id='vir' name="tipocam" value='canon' required>
                </label>
                
            </fieldset>
            <!--Desde textarea-->
            <fieldset>

              <legend>Comentarios:</legend>
                <label for="mensaje"> Mensaje <br/>
                  <textarea name="mensaje" rows="8" cols="40" id="mensaje" required></textarea>
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
