<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Rafael Carmona Luque - 2DAW</title>
<link rel="shortcut icon" href="imgs/pencil.ico" />
<link href="https://fonts.googleapis.com/css?family=Open+Sans|Marvel|Finger+Paint" rel="stylesheet">
<!-- CSS -->
<link href="/css/structure.css" rel="stylesheet" type="text/css">
<link href="/css/home.css" rel="stylesheet" type="text/css">
<link href="/css/folders.css" rel="stylesheet" type="text/css">
<link href="/css/exercise.css" rel="stylesheet" type="text/css">
<link href="/css/menu.css" rel="stylesheet" type="text/css">
<!-- JS -->
<script src="/js/show-div.js"></script>
</head>

<body>
  <div class="contenedor">
    <?php include("components.php"); ?>

    <div class="cabecera">
      <?php
        include("includes/menu.php");
        include("includes/header.php");
      ?>
    </div>
    <!-- Contenido -->
    <main>
      <?php
        include("includes/pages.php");
      ?>
    </main>

    <!-- Pie -->
    <?php include("includes/footer.php") ?>

  </div>
</body>
</html>
