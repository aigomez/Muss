<?php
  require_once('funciones_forms/fun_datos.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Muss</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Fonts -->
	   <link href="https://fonts.googleapis.com/css?family=Poppins:400&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,600&display=swap" rel="stylesheet">
  </head>
  <body>

    <?php

      if(!empty($_SESSION['username'])) { // Si username no esta vacio -> esta logeado -> muestro index

          header("Location: discover");

      } else { 					// Sino (username vacio) -> no esta logeado -> muestro otro index
          require_once('plantillas/index_nolog.php');
      }

    ?>

  </body>
</html>
