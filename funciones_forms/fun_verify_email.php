<?php
  require_once('../fun_connect.php');

  if (isset($_GET['token'])) {
      $token = $_GET['token'];
      $stmt = $db->prepare("UPDATE usuarios SET verified= 1 WHERE token = ? LIMIT 1");
      $stmt->bind_param('s', $token);
      $stmt->execute();

      header("Location: ../index");
   }
