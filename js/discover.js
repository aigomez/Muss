
  $(document).ready(function() {

    if(performance.navigation.type == 2){ // si el user vuelve a la página anterior (discover), refresca la página
     location.reload(true);
    }

   $('.btn-search').attr('disabled', true);

      $('.checkbox').click(function() {

        if ($('.checkbox').is(":checked")) {

          $('.btn-search').attr('disabled', false);
          $(".btn-search").css("background-color", "#f03465");
          $(".btn-search").css("color", "white");
          $(".btn-search").css("transition", "0.3s ease-in");

        }

        else {

          $('.btn-search').attr('disabled', true);
          $(".btn-search").css("background-color", "#ffffffe0");
          $(".btn-search").css("color", "#464545");
          $(".btn-search").css("transition", "0.3s ease-out");

        }

    });
  });
