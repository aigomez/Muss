<?php include('funciones_canciones/fun_library.php');?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <!-- CSS -->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" type="text/css" href="estilos/discover.css">
    <link rel="stylesheet" type="text/css" href="estilos/songs.css">

    <!-- JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/like_unlike.js" async defer></script>
    <script src="js/load_on_scroll_library.js" async defer></script>
  </head>
  <body>
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
