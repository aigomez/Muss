<?php
  require_once('funciones_forms/fun_datos.php');
  require_once('funciones_canciones/fun_songs.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Songs</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="estilos/discover.css">
    <link rel="stylesheet" type="text/css" href="estilos/songs.css">

    <!-- JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/discover.js" async defer></script>
    <script src="js/like_unlike.js" async defer></script>
    <script src="js/load_on_scroll_search.js" async defer></script>

    <!-- Fonts -->
	   <link href="https://fonts.googleapis.com/css?family=Poppins:400&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,600&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Varela+Round:400,600&display=swap" rel="stylesheet">
   </head>
  <body>

    <?php

      if(!empty($_SESSION['username'])) { // Si username no esta vacio -> esta logeado -> muestro index

          require_once('plantillas/header_log.php');

      } else { 					// Sino (username vacio) -> no esta logeado -> muestro otro index
          require_once('plantillas/header_nolog.php');
      }
    ?>
    <div class="cont">
    <form method="post" id="form">
      <div class="field-wrapper-btn">
        <label class="fa fa-search search-icon"></label>
        <input class="search" id="search" type="text" name="search" spellcheck="false" autocomplete="off" autocapitalize="off" placeholder="Search and hit enter for new songs">
      </div>
    </form>
    </div>
    <div class="songs">
    <div id="load_data">
      <!-- Canciones -->
    </div>

    <div id="load_data_message">
      <!-- Loading gif -->
    </div>
  </div>
  </body>
</html>
