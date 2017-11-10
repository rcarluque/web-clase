<?php
/**
 * User: Rafael Carmona Luque
 * File: index.php
 * Date: 05/10/17
 * Description: Index de introducción a Javascript
 */

 include("../../php/components.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Desarrollo Web Entorno Cliente</title>
<link href="https://fonts.googleapis.com/css?family=Open+Sans|Marvel|Finger+Paint" rel="stylesheet">
<!-- CSS -->
<link href="../../css/structure.css" rel="stylesheet" type="text/css">
<link href="../../css/folders.css" rel="stylesheet" type="text/css">
</head>

<body>
  <div class="contenedor">

    <div class="cabecera">
      <?php
        include("../../menu.php");
        put_letters();
      ?>
    </div>

    <div class="contenido">

      <?php
        create_folders();
      ?>

    </div>

    <?php
      include("../../php/footer.php")
    ?>

  </div>
</body>
</html>
