<?php
  require_once('funciones_forms/fun_datos.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Library</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="estilos/songs.css">

    <!-- JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Fonts -->
	   <link href="https://fonts.googleapis.com/css?family=Poppins:400&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,600&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Varela+Round:400,600&display=swap" rel="stylesheet">
  </head>
  <body>

    <?php

      if(!empty($_SESSION['username'])) { // Si username no esta vacio -> esta logeado -> muestro index

          require_once('plantillas/header_log.php');
          require_once('plantillas/library_log.php');

      } else { 					// Sino (username vacio) -> no esta logeado -> muestro otro index

          require_once('plantillas/header_nolog.php');
          require_once('plantillas/library_nolog.php');
      }

    ?>

  </body>
</html>
