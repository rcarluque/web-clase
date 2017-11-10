<?php
/**
 * User: Rafael Carmona Luque
 * File: calcular-edad.php
 * Date: 30/09/17
 * Description: Cargar fecha de nacimiento en una variable y calcular la edad.
 */

        // Fecha del cumpleaños
        $dia = 14;
        $mes = 11;
        $anio = 1995;
        // Fecha actual
        $dia_ac = date("j");
        $mes_ac = date("n");
        $ano_ac = date("Y");

        /* Comprobamos que los meses sean iguales, y si lo son comprobamos que el día de cumpleaños
        * sea mayor al día actual.
        * O si el mes del cumpleaños es mayor que el mes actual. En ambos casos restamos un año al año actual.
        */
       if (($mes == $mes_ac) && ($dia > $dia_ac) || ($mes > $mes_ac)) $ano_ac = ($ano_ac - 1);

       // Restamos el año actual al año de nacimiento y obtenemos la edad.
       $edad = ($ano_ac - $anio);

       echo "<h2>Tienes ".$edad." años</h2>";

?>

<button class="show-code" onclick="showCode()">Ver código</button>

<div id="div-code">
  <?php
    show_editor_code($_GET['file']);
  ?>
</div>