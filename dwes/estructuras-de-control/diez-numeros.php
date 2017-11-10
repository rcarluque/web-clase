<?php
/**
 * User: Rafael Carmona Luque
 * File: diez-numeros.php
 * Date: 30/09/17
 * Description: Escribir los 10 primeros números.
 */

        for($i = 1; $i <= 10; $i++) {
          echo "<table>$i</table>";
        }

      ?>

<button class="show-code" onclick="showCode()">Ver código</button>

<div id="div-code">
  <?php
    show_editor_code($_GET['file']);
  ?>
</div>