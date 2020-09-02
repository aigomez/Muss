<?php
  include('fun_connect.php');
  include('fun_gen_cookies.php');

  if (isset($_POST['enviar_generos']))  {

    $gen_rock = $_POST['gen_rock'];
    $gen_pop = $_POST['gen_pop'];
    $gen_cumbia = $_POST['gen_cumbia'];
    $gen_cyberpunk = $_POST['gen_cyberpunk'];
    $gen_japanese = $_POST['gen_japanese'];
    $gen_chill = $_POST['gen_chill'];
    $gen_retro = $_POST['gen_retro'];
    $gen_metal = $_POST['gen_metal'];

    generos($gen_rock, $gen_pop, $gen_cumbia, $gen_cyberpunk, $gen_japanese, $gen_chill, $gen_retro, $gen_metal);

    header("location: songs");

    # Se crea el perfil según lo seleccionado:

    require_once('sql_insertar_perfil.php');

}

if (isset($_POST['search']))  {
  $search = $_POST['search'];
  search($search);
  header("location: search_song");
}
