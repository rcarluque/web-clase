<?php
/**
 * User: Rafael Carmona Luque
 * File: calcula-letra-dni.php
 * Date: 17/10/17
 * Description: Calcula la letra de un dni introducido.
 */
?>

<form action="" method="post">
  Introduce NIF (Sólo número, no letra):<br>
  <input type="number" name="numero">
  <input type="submit" name="enviar" value="Enviar">
</form>

<?php

  $numero_recogido;

  function calculaLetra($num){
    $letras = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N',
    'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E', 'T'];
    return "la letra correspondiente al número ".$num." es la letra ".$letras[$num%23];
  }

  if(isset($_POST['enviar'])) {
    if($_POST['numero'] < 0 || $_POST['numero'] > 99999999) {
      echo "<span style='color: red'>El número introducido no es válido</span><br>";
    } else {
      $numero_recogido = $_POST['numero'];
      echo "<br>".calculaLetra($numero_recogido)."<br>";
    }
  }

?>

<button class="show-code" onclick="showCode()">Ver código</button>

<div id="div-code">
  <?php
    show_editor_code($_GET['file']);
  ?>
</div>