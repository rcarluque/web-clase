<?php
/**
 * User: Rafael Carmona Luque
 * File: usuario.php
 * Date: 29/10/17
 * Description: Introduce un usuario y una contraseña.
 */

  $output;

  if(isset($_COOKIE['login'])) { 
    $output.= "Ya estas logeado en el servidor";
    $output.= "<form action='' method='post'>
      <input type='submit' name='eliminar' value='Eliminar los datos'>
      </form>";
  } else {
    $output.= "<form action='' method='post'>
    Introduce nombre de usuario: <br>
    <input type='text' name='usuario' required> <br>
    Introduce contraseña: <br>
    <input type='password' name='clave' required> <br><br>
    <input type='submit' name='recordar' value='Recordar los datos'>
    </form>";
  }

  if(isset($_POST['recordar'])) {
    // Creamos la cookie de recordar usuario y clave, que durará 10 minutos.
    setcookie("login[usuario]", $_POST['usuario'], time()+600);
    setcookie("login[clave]", $_POST['clave'], time()+600);
    // Refrescamos la página después de enviar los datos
    $output.= "<meta http-equiv='refresh' content='0'>";
  }

  if(isset($_POST['eliminar'])) {
    setcookie("login[usuario]", $_POST['usuario'], time()-600);
    setcookie("login[clave]", $_POST['clave'], time()-600);
    // Refrescamos la página después de enviar los datos
    $output.= "<meta http-equiv='refresh' content='0'>";
  }

  echo $output;
?>

<button class="show-code" onclick="showCode()">Ver código</button>

<div id="div-code">
  <?php
    show_editor_code($_GET['file']);
  ?>
</div>