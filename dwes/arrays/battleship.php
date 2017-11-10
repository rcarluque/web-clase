<?php
/**
 * User: Rafael Carmona Luque
 * File: battleship.php
 * Date: 03/10/17
 * Description: Tablero para jugar al famoso juego de hundir la flota.
 */

        $output;
        $letras = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J");

        $output.= "<table style='border: 1px solid; margin: 0 auto'>";

        $output.= "<tr>";
        $output.= "<td></td>";
        for ($i = 0; $i < 10; $i++) {
          $output.= "<td>" . $i . "</td>";
        }
        $output.= "</tr>";

        for ($i = 0; $i < count($letras); $i++) {
          $output.= "<tr>";
          $output.= "<td>" . $letras[$i] . "</td>";
          for ($j = 0; $j < 10; $j++) {
            $output.= "<td style='border: 1px solid'>" . $letras[$i] . $j . "</td>";
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