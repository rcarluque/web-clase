<?php
/**
 * User: Rafael Carmona Luque
 * File: estacion-año.php
 * Date: 28/09/17
 * Description: Lista de enlaces según el perfil del usuario
 */
  
 $perfil = "usuario";

  if ($perfil === "administrador"){
?>
        <ul>
          <li><h4><a href="#">Inicio</a></h4></li>
          <li><h4><a href="#">Administrar usuarios</a></h4></li>
          <li><h4><a href="#">Salir</a></h4></li>
        </ul>
<?php
  } else if($perfil === "usuario"){
?>
        <ul>
          <li><h4><a href="#">Inicio</a></h4></li>
          <li><h4><a href="#">Perfil</a></h4></li>
          <li><h4><a href="#">Salir</a></h4></li>
        </ul>
<?php
  } else {
    echo "<h4>No existe ese perfil</h4>";
  }
?>

<button class="show-code" onclick="showCode()">Ver código</button>

<div id="div-code">
   <?php
    show_editor_code($_GET['file']);
  ?>
</div>