<?php
/**
 * User: Rafael Carmona Luque
 * File: contador-visitas.php
 * Date: 28/10/17
 * Description: Cuenta las visitas del usuario a la página.
 */

  $output;

  if(isset($_COOKIE['contador'])) { 
    // Caduca en un año 
    setcookie('contador', $_COOKIE['contador'] + 1, time() + 365 * 24 * 60 * 60); 
    $output = "<h2>Número de visitas: " . $_COOKIE['contador'] . "</h2>"; 
  } else { 
    // Caduca en un año 
    setcookie('contador', 1, time() + 365 * 24 * 60 * 60); 
    $output = "<h2>Es la primera vez que accedes a la página web</h2>"; 
  } 

  echo $output;
?>

<button class="show-code" onclick="showCode()">Ver código</button>

<div id="div-code">
  <?php
    show_editor_code($_GET['file']);
  ?>
</div>