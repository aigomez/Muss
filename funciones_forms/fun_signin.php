<?php

  require_once('fun_connect.php');
  require_once('fun_datos.php');

  if (!empty($_SESSION['username'])) { # Si el user ya ingresó, es decir, existe una cookie asociada lo envía al index
      header("Location: discover");
  }

  if (isset($_POST['signin'])) { # Ocurre sólo si el user presionó el botón signin

    # Solicita los datos que el usuario ingresó para luego cargarlos en la función cargarDatos

    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $hash_password = password_hash($pass, PASSWORD_DEFAULT); # hashea lo recibido, PASS DEFAULT va cambiando el algortimo con el tiempo

    $stmt = $db->prepare("SELECT idUs, user, email, password FROM usuarios WHERE email = ? OR user = ?"); # Selecciona los datos ingresados en la BD
    $stmt->bind_param('ss', $email, $email); # Reemplaza el ? parámetro por el contenido de la variable $user
    $stmt->bind_result($id, $nom_user, $nom_user, $pass_user); # Setea lo obtenido en esas 2 variables
    $stmt->execute();
    $stmt->fetch(); # Extrae lo consultado, Extraer != Mostrar

    if ($nom_user){  # Si el user existe entonces verifico el password

      if (password_verify($pass, $pass_user)){ # Si el user y la pass coinciden con un registro en la BD, entonces che

          cargarDatos($email);
          setcookie("id", $id, time() + (3600 * 24 * 365), "/muss");
          header("location: discover");

      } else { # Si no coinciden las passwords, envía un error
        require_once('mensajes/msg_error_up.php');
      }

    } else { # Si no coinciden el usuario, envía un error
      require_once('mensajes/msg_error_up.php');
    }

    $stmt->close();
    $db->close();
  }

  if (isset($_POST['Join'])) {  # Ocurre sólo si el user presionó el botón Registro
    header("Location: join");
  }

  if (isset($_POST['Forgot'])) {  # Ocurre sólo si el user presionó el botón Forgot
    require_once('fun_forgot.php');
  }
