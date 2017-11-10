<?php
/**
 * User: Rafael Carmona Luque
 * File: meses.php
 * Date: 02/10/17
 * Description: Muestra los meses del año.
 */

    $meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");

    for($i = 0; $i < count($meses); $i++) {
      echo "<table>".$meses[$i]."</table>";
    }

?>

<button class="show-code" onclick="showCode()">Ver código</button>

<div id="div-code">
  <?php
    show_editor_code($_GET['file']);
  ?>
</div>
