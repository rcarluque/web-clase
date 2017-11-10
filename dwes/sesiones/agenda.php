<?php
/**
 * User: Rafael Carmona Luque
 * File: agenda.php
 * Date: 21/10/17
 * Description: Aplicación para gestionar una agenda de contactos.
 */

  session_start();

  if(isset($_SESSION['views'])){
    $_SESSION['views'] = $_SESSION['views']+1;
  } else {
    $_SESSION['views'] = 1;
  }

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Phonebook</title>
</head>

<body>

  <form action="" method="post">
    Nombre: 
    <input type="text" name="nombre" />
    <br/>
    Apellidos:
    <input type="text" name="apellidos" />
    <br/>
    Número de telefono: 
    <input type="text" name="num_telf" />
    <br/><br/>
    <input type="submit" name="submit" value="Registrar" />
  </form>

<?php

  $test1[$_SESSION['views']] = $_POST['varname'];
  $test2[$_SESSION['views']] = $_POST['varroll'];
  $test3[$_SESSION['views']] = $_POST['varno'];

  for($i = 1; $i <= $_SESSION['views']; $i++) {
    echo $test1[$i]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".
    $test2[$i]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$test3[$i];
  }

?>
</body>
</html>