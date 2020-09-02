<?php
  session_start();
  session_destroy();
  session_unset();

  setcookie ("id", "",time() + (-3600 * 30 * 365), "/muss"); // elimino la cookie 'id' creada en join / sign in
  header("Location: ../signin");
