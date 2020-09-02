<?php

  $email = $_POST['email'];
  $token = bin2hex(random_bytes(60)); # Para funcionar en la BD debe de tener de longitud el doble o superior

  $stmt = $db->prepare("SELECT email FROM usuarios WHERE email = ?"); # Selecciona los datos ingresados en la BD
  $stmt->bind_param('s', $email); # Reemplaza el ? parámetro por el contenido de la variable $user
  $stmt->bind_result($nom_user); # Setea lo obtenido en esas 2 variables
  $stmt->execute();
  $stmt->fetch(); # Extrae lo consultado, Extraer != Mostrar

  if ($nom_user){  # Si el email existe entonces declaro la función para generar el token temporal

      function instert_tmp_token($email, $token) { # Declaro una nueva función para una query porque de otra manera se genera un error que me impide ejecutarla
        include('fun_connect.php');

        $stmt = $db->prepare("INSERT INTO password_resets (email, token) VALUES (?,?)");
        $stmt->bind_param('ss', $email, $token);
        $stmt->execute();
      }

      instert_tmp_token($email,$token); # Llamo a la función creada para así brindarle un token temporal al usuario (para reestablecer la contraseña)
      require_once('emails/reset_email.php');
      sendResetEmail($email, $token); # LLamo a la función que le enviará un email al usuario con el token
      require_once('mensajes/msg_success_email.php');

  } else { # Si no existe el email, envía el mismo error que si existiera (para no revelar información)
    require_once('mensajes/msg_error_forgot_email.php');
  }
  $stmt->close();
  $db->close();
