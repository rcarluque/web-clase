<?php
/**
 * User: Rafael Carmona Luque
 * File: nombre-apellidos.php
 * Date: 18/10/17
 * Description: Función que recibe nombre y apellidos y devuelve las iniciales
 */

?>

<form action="" method="post">
  Introduzca Nombre *:<br>
  <input type="text" name="nombre" required>
  <br>Introduzca primer apellido *:<br>
  <input type="text" name="apellido1" required>
  <br>Introduzca segundo apellido *:<br>
  <input type="text" name="apellido2" required>
  <br><input type="submit" name="enviar" value="Enviar">
</form>

<?php

  function nombreApellidos($nom, $app1, $app2){
    return "sus iniciales son: ".strtoupper(substr($nom, 0, 1)).strtoupper(substr($app1, 0, 1)).strtoupper(substr($app2, 0, 1));
  }

  if(isset($_POST['enviar'])) {
    if(!empty($_POST['nombre']) && !empty($_POST['apellido1'] && !empty($_POST['apellido2'])) ) {
      echo "<br>".nombreApellidos($_POST['nombre'], $_POST['apellido1'], $_POST['apellido2'])."<br>";
    } else {
      echo "<span style='color: red'>No ha rellenado uno de los campos</span><br>";
    }
  }

?>

<button class="show-code" onclick="showCode()">Ver código</button>

<div id="div-code">
  <?php
    show_editor_code($_GET['file']);
  ?>
</div>