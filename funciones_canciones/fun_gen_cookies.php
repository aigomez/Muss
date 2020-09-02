<?php

  function generos($gen_rock, $gen_pop, $gen_cumbia, $gen_cyberpunk, $gen_japanese, $gen_chill, $gen_retro, $gen_metal) {

    if (isset($_POST['gen_rock'])) {  setcookie('rock', $gen_rock, time() + (3600 * 24 * 365), "/"); } // 3600 * 24 * 365 = 1 año

    if (isset($_POST['gen_pop'])) {  setcookie('pop', $gen_pop, time() + (3600 * 24 * 365), "/"); }

    if (isset($_POST['gen_cumbia'])) {  setcookie('cumbia', $gen_cumbia, time() + (3600 * 24 * 365), "/"); }

    if (isset($_POST['gen_cyberpunk'])) {  setcookie('cyberpunk', $gen_cyberpunk, time() + (3600 * 24 * 365), "/"); }

    if (isset($_POST['gen_japanese'])) {  setcookie('japanese', $gen_japanese, time() + (3600 * 24 * 365), "/"); }

    if (isset($_POST['gen_chill'])) {  setcookie('chill', $gen_chill, time() + (3600 * 24 * 365), "/"); }

    if (isset($_POST['gen_retro'])) {  setcookie('retro', $gen_retro, time() + (3600 * 24 * 365), "/"); }

    if (isset($_POST['gen_metal'])) {  setcookie('metal', $gen_metal, time() + (3600 * 24 * 365), "/"); }
  }

  function search($search) {
    setcookie('search', $search, time() + (3600 * 24 * 365), "/");
  }
