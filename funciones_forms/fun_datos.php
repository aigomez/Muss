<?php

  ini_set('session.cookie_lifetime', 3.154e+7);  // 3.154e+7 = 1 año
  session_start();

  function cargarDatos($email) {

    $_SESSION['username'] = $email;

  }
