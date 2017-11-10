<?php
/**
 * User: Rafael Carmona Luque
 * File: num-dias-mes.php
 * Date: 28/09/17
 * Description: Carga en variables el mes y año e indica el número de días del mes.
 */

  $mes = "Agosto";
  $anio = 2017;
  $bisiesto= false;

  if (($anio%4 == 0 && $anio%100 != 0 ) || $anio%400 == 0) {
    $bisiesto = true;
  }

  switch ($mes){
   case "Enero":
    case "Marzo":
    case "Mayo":
    case "Julio":
    case "Agosto":
    case "Octubre":
    case "Diciembre":
      echo "<h3> $mes tiene 31 dias </h3>";
      break;
    case "Febrero":
      if($bisiesto)
        echo "<h3> $mes tiene 29 dias </h3>";
      else
        return "<h3> $mes tiene 28 dias </h3>";
      break;
    case "Abril":
    case "Junio":
    case "Septiembre":
    case "Noviembre":
      echo "<h3> $mes tiene 30 dias </h3>";
      break;
    default:
      echo "Mes inválido";
  }
?>

<button class="show-code" onclick="showCode()">Ver código</button>

<div id="div-code">
  <?php
    show_editor_code($_GET['file']);
  ?>
</div>