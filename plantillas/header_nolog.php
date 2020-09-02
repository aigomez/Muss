<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="estilos/header_nolog.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

    <!-- JS -->
    <script src="js/header.js" async defer></script>

    <div class="container" id="my_navbar">
      <div class="logo">
          <a href="index"><img src="imgs/logo-es.png" alt="logo"></a>
      </div>

      <div class="navbar">

        <div class="icon-user">
          <a href="signin"><label class="fa fa-user fa-2x"></label></a>
        </div>

        <div class="icon-bar" onclick="Show()"> <!-- 3 rayitas -->
          <label class="fa fa-bars fa-2x"></label>
        </div>

        <ul id="nav-lists">
            <li class="close"><span onclick="Hide()"><label class="fa fa-times"></label></span></li>
            <li><a href="discover">Discover</a></li>
            <li><a href="library">Library</a></li>

        </ul>
        <div class="sign-in"><ul><li><a href="signin">Sign In</a></li></ul></div>

      </div>
    </div>
  </body>
</html>
