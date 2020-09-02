<?php
  if (isset($_POST['search']))  {
    $search = $_POST['search'];
    include('fun_gen_cookies.php');
    search($search);
    header("location: library_search_song");
  }

  if (isset($_POST["limit"], $_POST["start"])) {

          include('../fun_connect.php');

          $query = $db->query("

          SELECT I.idCan, I.d, C.artista, C.nombre, C.fecha, C.genero
          FROM can_us I
          INNER JOIN canciones C ON (I.idCan = C.idCan)
          INNER JOIN usuarios U  ON (I.idUs ='".$_COOKIE['id']."')
          GROUP BY C.nombre ASC
          LIMIT ".$_POST["start"].", ".$_POST["limit"]."

          ");

          while ($row = $query->fetch_assoc()) {	?>

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
