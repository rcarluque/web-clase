<?php
/**
 * User: Rafael Carmona Luque
 * File: recursiva-suma-digitos.php
 * Date: 17/10/17
 * Description: Suma todos los digitos entre sí de un número introducido en un formulario.
 */

?>

<form action="" method="post">
  <input type="number" name="numero">
  <input type="submit" name="enviar" value="Enviar">
</form>

<?php

  $numero;

  function suma($x){
    $y;
    // Cuando en la llamada a la función, el número introducido sea menor que 10
    // $y será igual a la suma de ese número más el propio valor de $y
    if($x <10) {
      $y += $x;
    } else {
      // Extraemos el resto (1448 resto sería 8) y lo sumamos con 
      // la llamada a la función suma. Suma tendrá ahora como valor
      // la division entera del número introducido (144 por ej).
      $y = $x%10 + suma(intdiv($x,10));
    }
    return $y;
  }

  if(isset($_POST['enviar'])) {
    if($_POST['numero'] < 0) {
      echo "<span style='color: red'>El número introducido no es válido</span><br>";
    } else {
      $numero = $_POST['numero'];
      echo "<br> La suma total entre los digitos es: ".suma($numero)."<br>";
    }
  }

?>

<button class="show-code" onclick="showCode()">Ver código</button>

<div id="div-code">
  <?php
    show_editor_code($_GET['file']);
  ?>
</div>