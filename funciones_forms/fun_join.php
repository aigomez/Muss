<?php

  require_once('fun_connect.php');
  require_once('emails/join_email.php');
  require_once('fun_datos.php');

  if (!empty($_SESSION['username'])) { # Si el user ya se registró, es decir, existe una cookie asociada lo envía al index
      header("Location: index.php");
  }

 if (isset($_POST['Join'])) { # Ocurre sólo si el user presionó el botón Registrar

    # Primero solicita los datos que el usuario ingresó para luego compararlos

    $email = $_POST['email'];
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $token = bin2hex(random_bytes(60));
    $hash_password = password_hash($pass, PASSWORD_DEFAULT); # hashea lo recibido, PASS DEFAULT va cambiando el algortimo con el tiempo

    $stmt = $db->prepare("INSERT INTO usuarios (email, user, token, password) VALUES (?, ?, ?, ?) ");
    $stmt->bind_param('ssss', $email, $user, $token, $hash_password);
    $stmt->execute();

    $stmt = $db->prepare("SELECT idUs FROM usuarios WHERE user = ? OR email = ?");
    $stmt->bind_param('ss', $email, $email);
    $stmt->bind_result($id);
    $stmt->execute();
    $stmt->store_result();
    $stmt->fetch();

    if ($stmt->affected_rows > 0){  # Si se 'afectó una fila', es decir si se lograron insertar los datos envío un mail al usuario

        cargarDatos($email);
        setcookie("id", $id, time() + (3600 * 24 * 365), "/muss");

        sendVerificationEmail($email, $token);
        require_once('mensajes/msg_success_email.php');
        header( "Refresh:2; url=discover", true, 303);

    } else { # Si ya existe el email, envía el mismo mensaje que si no existiera (para no revelar información)
        require_once('mensajes/msg_error_email.php');
    }

    $stmt->close();
    $db->close();
  }

  if (isset($_POST['signin'])) {
    header("Location: signin");
  }
