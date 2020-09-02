<?php
  if (isset($_POST["limit"], $_POST["start"])) {

        include('../fun_connect.php');

        $rock = $_COOKIE['rock'];
        $pop = $_COOKIE['pop'];
        $cumbia = $_COOKIE['cumbia'];
        $cyberpunk = $_COOKIE['cyberpunk'];
        $japanese = $_COOKIE['japanese'];
        $chill = $_COOKIE['chill'];
        $retro = $_COOKIE['retro'];
        $metal = $_COOKIE['metal'];

        $sql_listar_canciones = $db->query("SELECT idCan, nombre, artista, genero, fecha FROM canciones
        WHERE genero = '$rock' OR genero = '$pop' OR genero = '$cumbia' OR genero = '$cyberpunk'
        OR genero = '$japanese' OR genero = '$chill' OR genero = '$retro' OR genero = '$metal'
        LIMIT ".$_POST["start"].", ".$_POST["limit"]."");

        while ($row = $sql_listar_canciones->fetch_assoc()) {	?>

            <table>

              <tr>
                <td class="text">
                  <button value="<?php echo $row['idCan'];?>" class="play text">

                    <span class="genero">
                      <script src="js/songs.js" async defer></script>
                      <?php echo $row['genero']; ?>
                    </span>

                    <span class="artista">
                      <?php echo $row['artista']; ?>
                    </span>

                    <span class="titulo">
                      <?php echo $row['nombre']; ?>
                    </span>

                    <span class="fecha">
                      <?php echo $row['fecha']; ?>
                    </span>

                  </button>
                </td>

                <td>
                  <?php require('fun_validate_like.php'); ?>
                </td>
            </tr>

          </table>

          <span class="play-sticky" id="play<?php echo $row['idCan']; ?>"></span> <!-- Reproductor Global -->
        <br>
        <?php
       }
   }
