<?php
/**
 * User: Rafael Carmona Luque
 * File: acepta-cookies.php
 * Date: 28/10/17
 * Description: Comprueba si el navegador tiene las cookies habilitadas.
 */

  $output;

  setcookie("ejemplo", "Probando acepta cookies", time()+1200);

  if(isset($_COOKIE["ejemplo"])) {
    if($_COOKIE["ejemplo"] != null) {
      $output.= "El navegador tiene las cookies habilitadas";
    } else {
      $output.= "El navegador no acepta cookies";
    }
  }

  echo $output;

?>

<button class="show-code" onclick="showCode()">Ver código</button>

<div id="div-code">
  <?php
    show_editor_code($_GET['file']);
  ?>
</div>