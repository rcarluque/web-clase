<?php
/**
 * User: Rafael Carmona Luque
 * File: familias.php
 * Date: 02/10/17
 * Description: Muestra un array con las familias
 */

          $familias = array(
              "Simpsons" => array("Homer", "Marge", "Bart", "Lisa", "Maggie"),
              "Flanders"=>array("Ned", "Tod", "Rod"),
              "Wiggum"=>array("Clancy", "Sara", "Ralph")
          );

          // Recorremos un array y posteriormente otro.
          foreach ($familias as $familia=>$nombres) {
              echo "La familia " . $familia . " está formada por: ";
              foreach ($nombres as $nombre){
                  echo $nombre . ", ";
              }
              echo "</br>";
          }

      ?>

<button class="show-code" onclick="showCode()">Ver código</button>

<div id="div-code">
  <?php
    show_editor_code($_GET['file']);
  ?>
</div>