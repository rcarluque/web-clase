<?php
/**
 * User: Rafael Carmona Luque
 * File: tabla-multiplicar.php
 * Date: 30/09/17
 * Description: Tabla de multiplicar del 1 al 10
 */

        $output;
        $output.="<table border='1' bordercolor=''#0000FF' cellspacing='5' cellpadding='5'>";
        for ($i=1; $i<=10; $i++) {
          $output.="<tr>";
          for ($j=0; $j<=10; $j++){
              $output.="<td>" . $j . " x " . $i . " = " . ($i * $j) ."</td>";
          }
          $output.="</tr>";
        }
        $output.="</table>";
        echo $output;
      ?>

<button class="show-code" onclick="showCode()">Ver código</button>

<div id="div-code">
  <?php
    show_editor_code($_GET['file']);
  ?>
</div>