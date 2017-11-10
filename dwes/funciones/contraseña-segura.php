<?php
/**
 * User: Rafael Carmona Luque
 * File: contraseña-segura.php
 * Date: 18/10/17
 * Description: Comprueba si una contraseña es segura.
 */

?>

<form action="" method="post">
  Introduce una contraseña:<br>
  <input type="text" name="clave">
  <input type="submit" name="enviar" value="Enviar">
</form>

<?php

  function compruebaClave($clave){
    $error;
    $flag_control = false;

    if(strlen($clave) < 8) {
      $error.= "La clave es demasiado corta, ";
      $flag_control = true;
    }

    if(!preg_match("#[0-9]+#", $clave)) {
      $error.= "La clave debe contener al menos un número, ";
      $flag_control = true;
    } 

    if(!preg_match("#[a-z]+#", $clave)) {
      $error.= "La clave debe contener al menos una letra, ";
      $flag_control = true;
    }

    if(!preg_match("#[A-Z]+#", $clave)) {
      $error.= "La clave debe contener al menos una mayúscula, ";
      $flag_control = true;
    }

    if(!preg_match("#[^\w]#", $clave)) {
      $error.= "La clave debe contener al menos un carácter especial, ";
      $flag_control = true;
    }

    if(preg_match("#[\s]#", $clave)) {
      $error.= "La clave no puede tener espacios en blanco, ";
      $flag_control = true;
    }

    if($flag_control) {
      return substr($error, 0, -2);
    } else{
      return "Tu contraseña es segura!";
    }
  }

  if(isset($_POST['enviar'])) {
    if(empty($_POST['clave'])) {
      echo "<span style='color: red'>Debe introducir una contraseña.</span><br>";
    } else {
      echo "<br>".compruebaClave($_POST['clave'])."<br>";
    }
  }

?>

<button class="show-code" onclick="showCode()">Ver código</button>

<div id="div-code">
  <?php
    show_editor_code($_GET['file']);
  ?>
</div>