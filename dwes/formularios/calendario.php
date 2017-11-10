<?php
/**
 * User: Rafael Carmona Luque
 * File: calendario.php
 * Date: 02/10/17
 * Description: Introduce un mes y un año en un formulario y muestra el calendario.
 */

?>

  <div class="contenido">
    
    <form action="" method="post">
      <select name="mes_elegido">
        <option value="1">Enero</option>
        <option value="2">Febrero</option>
        <option value="3">Marzo</option>
        <option value="4">Abril</option>
        <option value="5">Mayo</option>
        <option value="6">Junio</option>
        <option value="7">Julio</option>
        <option value="8">Agosto</option>
        <option value="9">Septiembre</option>
        <option value="10">Octubre</option>
        <option value="11">Noviembre</option>
        <option value="12">Diciembre</option>
      </select>

      <select name="anio_elegido">
        <option value="1995">1995</option>
        <option value="1996">1996</option>
        <option value="1997">1997</option>
        <option value="1998">1998</option>
        <option value="1999">1999</option>
        <option value="2000">2000</option>
        <option value="2001">2001</option>
        <option value="2002">2002</option>
        <option value="2003">2003</option>
        <option value="2004">2004</option>
        <option value="2005">2005</option>
        <option value="2006">2006</option>
        <option value="2007">2007</option>
        <option value="2008">2008</option>
        <option value="2009">2009</option>
        <option value="2010">2010</option>
        <option value="2011">2011</option>
        <option value="2012">2012</option>
        <option value="2013">2013</option>
        <option value="2014">2014</option>
        <option value="2015">2015</option>
        <option value="2016">2016</option>
        <option value="2017">2017</option>
        <option value="2018">2018</option>
        <option value="2019">2019</option>
        <option value="2020">2020</option>
      </select>

      <input type="submit" name="submit" value="Ver calendario">
    </form>


              <?php

                if (isset($_POST['mes_elegido']) & isset($_POST['anio_elegido'])) {
                    $output;
                    $mes= $_POST['mes_elegido'];
                    $anio = $_POST['anio_elegido'];
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
                    }
  ?>

<button class="show-code" onclick="showCode()">Ver código</button>

<div id="div-code">
  <?php
    show_editor_code($_GET['file']);
  ?>
</div>