<?php
/**
 * User: Rafael Carmona Luque
 * File: alumno-aleatorio.php
 * Date: 03/10/17
 * Description: Muestra un alumno aleatoriamente.
 */

 include("components.php");

  $alumnos = array("Nieves María Borrero Barea", "Rafael Carmona Arrabal", "Rafael Carmona Luque", "Alberto Perez Cano",
    "Daniel Gestino Notario", "Dario Fernandez Osuna", "David Mateo Cuenca", "Isabel María Gómez Palomeque",
    "Javier Ponferrada López", "Jesús Mejias Leiva", "Jesús Requena Pérez", "Jorge Granados Jurado",
    "José Lucena", "Juan Rueda Morales", "Mario Ferrer Nieto", "Miguel Ángel Gavilán Merino",
    "Pablo León Alcaide", "Pedro Caballero", "Rafael Mellado Jiménez", "Soledad Cruz Moleón",
    "Victor Manuel Gómez Muñoz", "Victoriano Sevillano Vega");

  // Array Rand proporciona aleatoriamente un número del array.
  // por lo que imprimimos por pantalla el número aleatorio del array de los alumnos.
  echo "<table>".$alumnos[array_rand($alumnos)]."</table>";

  $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  $ruta = explode("/", $_SERVER[REQUEST_URI]);

?>

<button class="show-code" onclick="showCode()">Ver código</button>

<div id="div-code">
  <?php
    show_editor_code($_GET['file']);
  ?>
</div>
