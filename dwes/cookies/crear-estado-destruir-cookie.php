<?php
/**
 * User: Rafael Carmona Luque
 * File: crear-estado-destruir-cookie.php
 * Date: 28/10/17
 * Description: Crear una cookie de duración limitada, comprobar el estado de la cookie y destruirla.
 */

  $output;

  $output.= "<form action='' method='post'>
    <input type='submit' name='crear' value='Crear cookie'>
    <input type='submit' name='comprobar' value='Comprobar cookie'>
    <input type='submit' name='borrar' value='Borrar cookie'>
  </form>";

  if(isset($_POST['crear'])) {
    // El valor de la cookie será el tiempo actual.
    setcookie("ejemplo", time(), time()+10);
    $output.= "<br> Se ha creado la cookie";
  }

  if(isset($_POST['comprobar'])) {
    if(isset($_COOKIE["ejemplo"])) {
      // Para comprobar el tiempo de expiración. Le restamos al tiempo inicial, el tiempo actual menos el tiempo
      // cuando la cookie fue creada.
      $output.= "<br> La cookie expirará en: ". (10 - (time() - $_COOKIE['ejemplo'])." segundos.");
    } else {
      $output.= "<br> La cookie no existe o ha expirado.";
    }
  }

  if(isset($_POST['borrar'])) {
    setcookie("ejemplo",  "", time()-3600);
  }

  echo $output;

?>

<button class="show-code" onclick="showCode()">Ver código</button>

<div id="div-code">
  <?php
    show_editor_code($_GET['file']);
  ?>
</div>