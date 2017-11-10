<?php
/**
 * User: Rafael Carmona Luque
 * File: ultima-visita.php
 * Date: 06/10/17
 * Description: Comprueba la última visita del usuario al sitio.
 */

  if(isset($_COOKIE['AboutVisit'])) { 
    $last = $_COOKIE['AboutVisit']; 
  }

  $output;
  if(isset($_COOKIE['visitas'])) { 
    $ultima = $_COOKIE['visitas']; 
  }
  // Añadimos un año al tiempo actual, para el tiempo de expiración de la cookie.
  $ano = 31536000 + time(); 
  setcookie(visitas, time(), $ano); 

  if (isset($ultima)) { 
    $cambiar_tiempo = time() - $ultima; 
    if ($cambiar_tiempo > 86400) {
      // Le dice al usuario la última visita si esta fue hace más de un día
      $output.= "<h3>¡Bienvenido de nuevo!</h3> <br> 
        Tu última visita fue: ". date("m/d/y", $ultima); 
    } else { 
      // Mensaje si es el mismo día.
      $output.= "<h3>Gracias por visitar mi página</h3>"; 
    }
  } else { 
    // Mensaje para la primera visita del usuario
    $output.= "<h3>Bienvenido a mi página</h3>";
  } 

  echo $output;
?> 