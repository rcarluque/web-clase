<?php

  if(!isset($_GET['folder']) && !isset($_GET['file'])){
    include("homepage.php");
  } else {
    include("components.php");

    if(!isset($_GET['file'])) {
      $fil = list_files($_GET['folder']);
      $output;

      $output.= "<div class='alineacion'>";

      foreach ($fil as $key => $value) {
        $file = explode("/", $value);
        // Eliminamos los guiones del final de la entrada final del archivo recorrido.
        $pretty_name = str_replace("-", " ", end($file));

        // Si el archivo tiene extesión, quiere decir que es un fichero, sino será directorio.
        if( preg_match('/\\.[^.\\s]{3,4}$/', $pretty_name) ) {
          // Eliminamos la extensión del archivo para mejor visualización
          $withoutExt = preg_replace('/\\.[^.\\s]{3,4}$/', '', $pretty_name);
          // Eliminamos la parte de la cadena desde el punto, hacia adelante.
          $valueClean = preg_replace('/\\.[^.\\s]{3,4}$/', '', $value);

          $output.= "<a href='/file/".$valueClean."'>
            <div class='carpetas'><img class='img-folder' src='/imgs/icon-file.png' /><p class='enlaces-folders'>".$withoutExt."</p></div>
          </a>";
        } else {
          $output.= "<a href='/folder/".$value."'>
            <div class='carpetas'><img class='img-folder' src='/imgs/icon-folder.png' /><p class='enlaces-folders'>".$pretty_name."</p></div>
          </a>";
        }
      }
      $output.= "</div>";
      echo $output;
    } else {
      include($_GET['file']);
    }

  }
?>