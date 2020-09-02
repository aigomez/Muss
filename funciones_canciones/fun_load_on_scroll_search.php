<?php
  if (isset($_POST["limit"], $_POST["start"])) {

        include('../fun_connect.php');

        $search = $_COOKIE['search'];
        setcookie('search', $search, time() + (3600 * 24 * 365), "/");
        $search = $_COOKIE['search'];

        $sql_listar_canciones_search = $db->query("SELECT idCan, nombre, artista, genero, fecha FROM canciones
        WHERE nombre LIKE '%$search%' OR artista LIKE '%$search%' OR genero LIKE '%$search%'
        LIMIT ".$_POST["start"].", ".$_POST["limit"]."");

        while ($row = $sql_listar_canciones_search->fetch_assoc()) {	?>

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
