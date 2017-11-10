<?php
/**
 * User: Rafael Carmona Luque
 * File: mayor-de-dos.php
 * Date: 28/09/17
 * Description: Carga dos números en variables y nos devuelve el mayor de ellos.
 */

  $num1 = 45;
  $num2 = 76;
  $mensaje;

  $mensaje .= "<h3>Los números seleccionados: $num1 y $num2</h3>";

  if($num1 > $num2) {
    $mensaje .= "<h4>".$num1 ." es el número mayor</h4>";
  } else {
    $mensaje .= "<h4>".$num2 ." es el número mayor</h4>";
  }

  echo $mensaje;

?>

<button class="show-code" onclick="showCode()">Ver código</button>

<div id="div-code">
  <?php
    show_editor_code(basename($_SERVER['PHP_SELF']));
  ?>
</div>