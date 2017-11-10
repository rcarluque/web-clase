<?php
/**
 * User: Rafael Carmona Luque
 * File: sumar-numeros.php
 * Date: 13/10/17
 * Description: Introduce una cantidad a sumar y suma los números.
 */

  $output;
  $cantidad_num;
  $total;
  $error_msg;

  $output .= "<form action='' method='post'>
        Introduce la cantidad de números que quieres sumar: 
        <input type='number' name='cantidad_num'>
          <span style= 'color: red'>$error_msg</span>
        <br><br>
        <input type='submit' name='enviar' value='Aceptar'>
      </form>";

  $output.= "<form method='post' action=''>";
  if (isset($_POST["enviar"])) {
    if ($_POST["cantidad_num"] <= 0) {
      $error_msg.= "<br>La cantidad introducida no es válida";
    } else {
      $cantidad_num = $_POST["cantidad_num"];
      $output.= "<br>";
        for ($i = 0; $i < $cantidad_num; $i++) {
  $output.= "<br>Número ".($i + 1)."
    <input type='number' name='numeros[]'>";
        }
        $output.= "<br><input type='submit' name='sumar' value='Sumar'>";
    }
  }

  if (isset($_POST["sumar"])) {
    $numeros = $_POST["numeros"];

    for ($j = 0; $j < count($numeros); $j++) {
        $total += $numeros[$j];
    }

    $output.= "La suma de los números tiene como resultado: ".$total."<br>";
  }

  $output.= "</form>";
  echo $output;

?>

<button class="show-code" onclick="showCode()">Ver código</button>

<div id="div-code">
  <?php
    show_editor_code($_GET['file']);
  ?>
</div>