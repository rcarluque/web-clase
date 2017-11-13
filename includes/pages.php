<?php
  if(!isset($_GET['folder']) && !isset($_GET['file'])){
    include("homepage.php");
  } else {
    include("components.php");

    if(!isset($_GET['file'])) {
      if(!isset($_GET['folder2'])) {
        $fil = list_files($_GET['folder']);
      } else {
        $fil = list_files($_GET['folder']."/".$_GET['folder2']);
      }

      $output;
      $output.= "<div class='alineacion'>";

      foreach ($fil as $key => $value) {
        $file = explode("/", $value);
        // Si el archivo tiene extesión, quiere decir que es un fichero, sino será directorio.
        if( preg_match('/\\.[^.\\s]{3,4}$/', end($file)) ) {
          // Eliminamos la extensión del archivo.
          $archivo = preg_replace('/\\.[^.\\s]{3,4}$/', '', end($file));
          // Eliminamos los guiones y los sustitumos por espacios del nombre de la carpeta.
          $pretty_name = str_replace("-", " ", $archivo);
          // Eliminamos el último elemento (el archivo) del array $file.
          array_pop($file);
          // Unimos el array file separando los elementos por /
          $carpeta = implode("/", $file);         

          $output.= "<a href='/folder/".$carpeta."/file/".$archivo."'>
            <div class='carpetas'><img class='img-folder' src='/imgs/icon-file.png' /><p class='enlaces-folders'>".$pretty_name."</p></div>
          </a>";

        } else {
          // Eliminamos los guiones y los sustitumos por espacios del nombre de la carpeta.
          $pretty_name = str_replace("-", " ", end($file));
          $output.= "<a href='/folder/".$value."/'>
            <div class='carpetas'><img class='img-folder' src='/imgs/icon-folder.png' /><p class='enlaces-folders'>".$pretty_name."</p></div>
          </a>";
        }
      }

      $output.= "</div>";
      echo $output;
      
    } else {
      include($_GET['folder']."/".$_GET['file']);
    }
  }

?>