<?php

  require_once('fun_connect.php');
  require_once('fun_datos.php');

  if (!empty($_SESSION['username'])) { # Si el user ya se registró / ingresó, es decir, existe una cookie asociada lo envía al index
      header("Location: index.php");
  }

  if (isset($_POST['reset'])) {

    $new_pass = $_POST['new_pass'];
    $token = $_GET['token'];
    $hash_password = password_hash($new_pass, PASSWORD_DEFAULT);

    $stmt = $db->prepare("SELECT email FROM password_resets WHERE token = ? LIMIT 1");
    $stmt->bind_param('s', $token);
    $stmt->bind_result($email);
    $stmt->execute();
    $stmt->store_result();
    $stmt->fetch();

    if ($email) {

      $stmt = $db->prepare("UPDATE usuarios SET password = ? WHERE email = ? LIMIT 1");
      $stmt->bind_param('ss', $hash_password, $email);
      $stmt->execute();

      $stmt = $db->prepare("SELECT idUs, user, email FROM usuarios WHERE email = ? OR user = ?"); # Selecciona los datos ingresados en la BD
      $stmt->bind_param('ss', $email, $email); # Reemplaza el ? parámetro por el contenido de la variable $user
      $stmt->bind_result($id, $nom_user, $nom_user); # Setea lo obtenido en esas 2 variables
      $stmt->execute();
      $stmt->fetch(); # Extrae lo consultado, Extraer != Mostrar

      cargarDatos($email);
      setcookie("id", $id, time() + (3600 * 24 * 365), "/muss");

      require_once('mensajes/msg_success_newpass.php');
      header( "Refresh:2; url=index", true, 303);

      $stmt->close();
      $db->close();
    }
  }
