<?php
/**
 * User: Rafael Carmona Luque
 * File: calendario.php
 * Date: 01/10/17
 * Description: Dado un mes y un año, mostrar el calendario del mes. Marcar el día actual en verde y los festivos en rojo.
 */

        $output;
        $mes= 10;
        $anio = 2017;
        $contador = 0;
        // Contador para indicar el dia
        $dia = 1;
        // Número de días del mes elegido
        $numero_dias = cal_days_in_month(CAL_GREGORIAN, $mes, $anio);
        // Primer día del mes
        $primer_dia = date("N", mktime(0,0,0, $mes, 8, $anio));
        $dia_actual = date("j");
        $mes_actual = date("n");
        $output.= "
          <table style='margin: 20px auto' border='1' bordercolor=''#0000FF' cellspacing='4' cellpadding='4'>
            <tr style='border: double;'>
              <td>Lunes</td>
              <td>Martes</td>
              <td>Miércoles</td>
              <td>Jueves</td>
              <td>Viernes</td>
              <td>Sábado</td>
              <td>Domingo</td>
            </tr> ";

          $output.= "<tr style='border: double;'>";

          for ($i = 1; $i <= 7; $i++) {
            if ($i < $primer_dia) {
              $output.= "<td></td>";
            } else {
              if ($dia == $dia_actual and $mes == $mes_actual) {
                $output.= "<td style='background-color: #3fc912'>" . $dia++ . "</td>";
              } else if ($i == 7) {
                $output.= "<td style='background-color: #c90c07'>" . $dia++ . "</td>";
              } else {
                $output.= "<td>" . $dia++ . "</td>";
              }
            }
          }

          $output.= "</tr>";

          while ($dia <= $numero_dias) {
            $output.= "<tr style='border: double;'>";

            for ($j = 0; $j < 7; $j++) {
              if ($dia == $numero_dias + 1) {
                break;
              } else if ($dia == $dia_actual and $mes == $mes_actual) {
                  $output.= "<td style='background-color: #3fc912'>" . $dia++ . "</td>";
              } else if ($j == 6) {
                  $output.= "<td style='background-color: #c90c07'>" . $dia++ . "</td>";
              } else {
                  $output.= "<td>" . $dia++ . "</td>";
              }
            }
            $output.= "</tr>";
          }
            $output.= "</table>";

            echo $output;

        ?>

<button class="show-code" onclick="showCode()">Ver código</button>

<div id="div-code">
  <?php
    show_editor_code($_GET['file']);
  ?>
</div>