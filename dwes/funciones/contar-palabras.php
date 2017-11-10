<?php
/**
 * User: Rafael Carmona Luque
 * File: contraseña-segura.php
 * Date: 18/10/17
 * Description: Comprueba si una contraseña es segura.
 */

?>

<form action="" method="post">
  Escribe lo que quieras:<br>
  <textarea name="texto[]" rows="3" cols="30"></textarea><br>
  <input type="submit" name="enviar" value="Enviar">
</form>

<?php

  function cuentaPalabras($texto){
    // Comprobamos los varios espacios en blanco y los sustituimos por uno solo.
    $texto = preg_replace('/\s\s+/', ' ', $texto);
    foreach ($texto as $valor) {
      $palabras = explode(" ", $valor);
      return count($palabras);
    }
  }

  if(isset($_POST['enviar'])) {
    if(empty($_POST['texto'])) {
      echo "<span style='color: red'>Debes escribir algo.</span><br>";
    } else {
      echo "<br> Se han introducido un total de: ".cuentaPalabras($_POST['texto'])." palabras en el texto<br>"; 
    }
  }

?>

<button class="show-code" onclick="showCode()">Ver código</button>

<div id="div-code">
  <?php
    show_editor_code($_GET['file']);
  ?>
</div>