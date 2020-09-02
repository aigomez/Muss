<?php

  include('../fun_connect.php');

  if (isset($_POST['like'])) {

    $id = $_POST['id'];
    $query = mysqli_query($db,"select * from `can_us` where idCan='$id' and idUs='".$_COOKIE['id']."'") or die(mysqli_error());

    if (mysqli_num_rows($query) > 0) { // Si ya está insertado, lo elimina

      mysqli_query($db,"delete from `can_us` where idUs='".$_COOKIE['id']."' and idCan='$id'");

    } else { // Si no está, lo carga a la bd

      mysqli_query($db,"insert into `can_us` (idUs,idCan) values ('".$_COOKIE['id']."', '$id')");

    }
  }
