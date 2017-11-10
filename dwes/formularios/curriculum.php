<?php
/**
 * User: Rafael Carmona Luque
 * File: meses.php
 * Date: 02/10/17
 * Description: Muestra los meses del año.
 */

  $nombre = "";
  $apellidos = "";
  $fecha_nacimiento = "";
  $sexo = $_POST["sexo"];
  $titulos = "";
  $ingles = "";
  $ciudad = "";
  $carnet = "";
  $error;
  $control = false;

  if (empty($_POST["nombre"])) {
    $error .= "Campo nombre no introducido, ";
    $control = true;
  } else {
    $nombre = $_POST["nombre"];
  }

  if (empty($_POST["apellidos"])) {
    $error .= "Campo apellidos no introducido, ";
    $control = true;
  } else {
    $apellidos = $_POST["apellidos"];
  }

  if (empty($_POST["fecha_nacimiento"])) {
    $error .= "Campo fecha de nacimiento no introducido, ";
    $control = true;
  } else {
    $fecha_nacimiento = $_POST["fecha_nacimiento"];
  }

  if (empty($_POST["carnet"])) {
    $error .= "Campo carnet no introducido, ";
    $control = true;
  } else {
    $carnet = $_POST["carnet"];
  }

  if (isset($_POST["enviar"]) && $control == true) {
    // Eliminamos la ',' y el espacio final de la cadena error.
    echo substr($error, 0, -2);
  } else if(isset($_POST["enviar"]) && $control == false){
    echo "El formulario ha sido enviado correctamente.";
  }

?>

<div>
  <form action="" method="post">
    Nombre: *
    <input type="text" name="nombre"><br><br>
    Apellidos: *
    <input type="text" name="apellidos"><br><br>
    Fecha de nacimiento:<br>
    <input type="date" name="fecha_nacimiento"><br><br>
    Sexo:<br>
    <input type="radio" name="sexo" value="hombre" checked>Hombre
    <input type="radio" name="sexo" value="mujer">Mujer<br><br>
    Títulos y experiencias: <br>
    <textarea name="titulos" cols="30" rows="5"></textarea><br><br>
    Inglés:
    <input type="checkbox" name="ingles"><br><br>
    Ciudad:
    <select name="ciudad">
      <option value="sevilla">Sevilla</option>
      <option value="cordoba">Córdoba</option>
      <option value="malaga">Málaga</option>
    </select><br><br>
    Carnet: *
    <select multiple name="carnet" style="height: 50px">
      <option value="coche">Coche</option>
      <option value="moto">Moto</option>
    </select><br><br>

    <input type="submit" name="enviar" value="Enviar">
    <input type="reset" name="reset" value="Limpiar">
    </form>
</div>

<button class="show-code" onclick="showCode()">Ver código</button>

<div id="div-code">
  <?php
    show_editor_code($_GET['file']);
  ?>
</div>