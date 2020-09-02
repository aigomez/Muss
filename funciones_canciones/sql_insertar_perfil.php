<?php

  $user = $_SESSION['username'];

  $insertar_perfil = $db->query("INSERT INTO perfiles (tags, user)
    VALUES ('$gen_rock $gen_pop $gen_cumbia $gen_cyberpunk $gen_japanese $gen_chill $gen_retro $gen_metal', '$user')");
