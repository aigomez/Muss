
  // Responsive Nav (animación) - Mobile

  var navList = document.getElementById("nav-lists");

  function Show() {
    navList.classList.add("_Menus-show");
    setTimeout(function(){
      $(".body, .lib-nolog, .cont, .songs").hide(); // oculta el contenido del body cuando se presionan las 3 rayitas
    }, 50);
  }

  function Hide(){
    navList.classList.remove("_Menus-show");
    setTimeout(function(){
      $(".body, .lib-nolog, .cont, .songs").fadeIn(); // contrario a hide, los muestra
    }, 100);
  }

 // Sign out

  $(".dropdown-content").hide();

  $(".dropdown").click(function() { // muestra el 'Sign Out' al darle click en el username
    $(".dropdown-content").slideToggle(80);
  })

  $(document).mouseup(function(e) { // 'mouseup' ocurre cuando se hace click en el elemento deseado (en este caso es document)
    if (!$(".dropdown").is(e.target) && $(".dropdown").has(e.target).length === 0) { // Si se clickea en otra parte que no sea el 'Sign Out' -> desaparece
      $(".dropdown-content").slideUp(80);
    }
  });

  $('.dropdown-content').click(function() { // redirecciona al logout
    window.location.href = "funciones_forms/fun_logout";
  })
