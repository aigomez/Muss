<?php
  $validate_like = mysqli_query($db, "SELECT * FROM `can_us` WHERE idCan='".$row['idCan']."' and idUs='".$_COOKIE['id']."'");

  if (mysqli_num_rows($validate_like) > 0) {
    ?>
    <button value="<?php echo $row['idCan']; ?>" class="unlike fas fa-heart"></button>
    <?php
  }
  else {
    ?>
    <button value="<?php echo $row['idCan']; ?>" class="like far fa-heart"></button>
    <?php
  }
