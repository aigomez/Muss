<?php
  require_once('funciones_forms/fun_datos.php');
  include('funciones_canciones/fun_songs.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Discover</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="estilos/discover.css">

    <!-- JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/discover.js" async defer></script>
    <script src="js/cookies.js" async defer></script>

    <!-- Fonts -->
	   <link href="https://fonts.googleapis.com/css?family=Poppins:400&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,600&display=swap" rel="stylesheet">
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

        <form method="post">
          <figure>
            <label>
              <input class="checkbox" type="checkbox" id="gen_rock" name="gen_rock" value="rock">
              <img class="gen-img" src="imgs/rock.png" alt="rock">
            </label>
            <figcaption>rock</figcaption>
          </figure>

          <figure>
           <label>
             <input class="checkbox" type="checkbox" id="gen_pop" name="gen_pop" value="pop">
             <img class="gen-img" src="imgs/pop.png" alt="pop">
           </label>
           <figcaption>pop</figcaption>
          </figure>

          <figure>
            <label>
              <input class="checkbox" type="checkbox" id="gen_cumbia" name="gen_cumbia" value="cumbia">
              <img class="gen-img" src="imgs/cumbia.png" alt="cumbia">
            </label>
            <figcaption>cumbia</figcaption>
          </figure>

          <figure>
            <label>
              <input class="checkbox" type="checkbox" id="gen_cyberpunk" name="gen_cyberpunk" value="cyberpunk">
              <img class="gen-img" src="imgs/cyberpunk.png" alt="cyberpunk">
            </label>
            <figcaption>cyberpunk</figcaption>
          </figure>

          <figure>
            <label>
              <input class="checkbox" type="checkbox" id="gen_japanese" name="gen_japanese" value="japanese">
              <img class="gen-img" src="imgs/japanese.png" alt="japanese">
            </label>
            <figcaption>japanese</figcaption>
          </figure>

          <figure>
            <label>
              <input class="checkbox" type="checkbox" id="gen_chill" name="gen_chill" value="chill">
              <img class="gen-img" src="imgs/chill.png" alt="chill">
            </label>
            <figcaption>chill</figcaption>
          </figure>

          <figure>
            <label>
              <input class="checkbox" type="checkbox" id="gen_retro" name="gen_retro" value="retro">
              <img class="gen-img" src="imgs/retro.png" alt="retro">
            </label>
            <figcaption>retro</figcaption>
          </figure>

          <figure>
            <label>
              <input class="checkbox" type="checkbox" id="gen_metal" name="gen_metal" value="metal">
              <img class="gen-img" src="imgs/metal.png" alt="metal">
            </label>
            <figcaption>metal</figcaption>
          </figure>

          <div>
            <input class="btn-search" name="enviar_generos" type="submit" value="Search">
          </div>

        </div>
    </form>
  </body>
</html>
