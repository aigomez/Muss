<?php
	session_start();
	include('../fun_connect.php');

	if (isset($_POST['play'])){

		$id = $_POST['id'];

    $listar_cancion = $db->query("SELECT archivo FROM canciones WHERE idCan = $id");

    while ($datos = $listar_cancion->fetch_assoc()) { // reproductor global

			echo '<audio class="player" controls autoplay>
      	<source src="data:audio/mp3;base64,'.base64_encode($datos['archivo']).'">
    	</audio>';

    }
  }
