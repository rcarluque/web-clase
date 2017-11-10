<?php
/**
 * User: Rafael Carmona Luque
 * File: estacion-año.php
 * Date: 28/09/17
 * Description: Muestra una imagen u otra en función de la estación
 */

        // Guardamos en una variable la representación numérica de un mes, sin ceros iniciales.
        $mesActual = date("n");
        // Guardamos en otra variable el día del mes sin ceros iniciales.
        $diaActual = date("j");
        switch($mesActual){
          case 1:
          case 2:
            $estacion = "invierno";
            break;
          case 3:
            if($diaActual < 21) $estacion= "invierno";
            else $estacion = "primavera";
            break;
          case 4:
          case 5:
            $estacion = "primavera";
            break;
          case 6:
            if($diaActual < 21) $estacion= "primavera";
            else $estacion = "verano";
            break;
          case 7:
          case 8:
            $estacion = "verano";
            break;
          case 9:
            if($diaActual < 22) $estacion= "verano";
            else $estacion = "otoño";
            break;
          case 10:
          case 11:
            $estacion = "otoño";
            break;
          case 12:
            if($diaActual < 21) $estacion= "otoño";
            else $estacion = "invierno";
            break;
        }

        echo "<img src=/imgs/".$estacion.".jpg style='width: 100%; height: 100%;' />";
      ?>

<button class="show-code" onclick="showCode()">Ver código</button>

<div id="div-code">
  <?php
    show_editor_code($_GET['file']);
  ?>
</div>