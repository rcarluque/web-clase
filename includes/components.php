<?php

  function list_files($directorio) {
    $direcciones = array();
    if ($dir = opendir($directorio)){ 
      
          while(false !== ($file = readdir($dir))) {
              if ($file == '.' || $file == '..' 
                // Hacemos que no se muestren los archivos css ni png
              || strtolower(substr($file, strrpos($file, '.') + 1)) == 'css'
              || strtolower(substr($file, strrpos($file, '.') + 1)) == 'png'
              ) {
                  continue;
              } else if ($directorio . '/' . $file) {
                array_push($direcciones, $directorio."/".$file);
              }
          }   
          closedir($dir);    
      }
    return $direcciones;
  }

  function show_editor_code($file) {
    // Strip code and first span
    $code = substr(highlight_file($file, true), 36, -15);
    //Split lines
    $lines = explode('<br />', $code);
    //Count
    $lineCount = count($lines);
    //Calc pad length
    $padLength = strlen($lineCount);

    //Re-Print the code and span again
    echo "<code><span style=\"color: #000000\">";

    //Loop lines
    foreach($lines as $i => $line) {
      //Create line number
      $lineNumber = str_pad($i + 1,  $padLength, '0', STR_PAD_LEFT);
      //Print line
      echo sprintf('<br><span style="color: #999999">%s | </span>%s', $lineNumber, $line);
    }
    //Close span
    echo "</span></code>";
  }

?>
