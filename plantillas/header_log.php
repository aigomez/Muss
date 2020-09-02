<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="estilos/header_log.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

    <!-- JS -->
    <script src="js/header.js" async defer></script>
  </head>
  <body>
    <div class="container" id="my_navbar">
      <div class="logo">
          <a href="discover"><img src="imgs/logo-es.png" alt="logo"></a>
      </div>

      <div class="navbar">        

        <div class="icon-bar" onclick="Show()"> <!-- 3 rayitas -->
          <label class="fa fa-bars fa-2x"></label>
        </div>

        <ul id="nav-lists">
            <li class="close"><span onclick="Hide()"><label class="fa fa-times"></label></span></li>
            <li><a href="discover">Discover</a></li>
            <li><a href="library">Library</a></li>

            <!-- Logged user - Mobile -->

            <li class="hide-sign-out-icon">
              <a href="funciones_forms/fun_logout.php">Sign Out <label class="fa fa-sign-out-alt fa-1x"></label></a>
            </li>
        </ul>

        <!-- Logged user - Desktop -->

        <div class="dropdown" id="my_drop">
          <div class="sign-in">

            <ul>

              <div class="icon-log">
                <label class="fa fa-user-circle fa-2x"></label>
              </div>

              <li>
                <a>
                  <?php echo $_SESSION['username'] ?> <label class="fa fa-caret-down fa-1x"></label> <!-- Icono: triangulito invertido -->

                  <div class="dropdown-content">
                    <p><label class="fas fa-sign-out-alt"></label> Sign Out</p> <!-- Es header.js quien redireje al seleccionar 'Sign Out' -->
                  </div>
                </a>
              </li>

            </ul>

          </div>
        </div>

      </div>
    </div>

  </body>
</html>
