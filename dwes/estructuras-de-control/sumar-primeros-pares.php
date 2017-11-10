<?php
/**
 * User: Rafael Carmona Luque
 * File: sumar-primeros-pares.php
 * Date: 30/09/17
 * Description: Sumar los primeros 3 números pares existentes.
 */

  $suma = 0;
  for ($i = 0; $i <= 3; $i++) {
    $suma = $suma + $i*2;
  }

  echo "<h2> El total de la suma es $suma</h2>";
?>

<button class="show-code" onclick="showCode()">Ver código</button>

<div id="div-code">
  <?php
    show_editor_code($_GET['file']);
  ?>
</div>