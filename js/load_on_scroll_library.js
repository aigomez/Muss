
  $(document).ready(function(){

    var start = 0;
    var limit = 20;

    var action = 'inactive';

    function load_country_data(limit, start) {

      $.ajax ({

        url: "funciones_canciones/fun_library.php",
        method: "POST",
        data: {
         limit: limit,
         start: start
        },

      cache: false,

      success: function(data) {

        $('#load_data').append(data);

          if(data == '') {

             //$('#load_data_message').html("<label class='loading fab fa-staylinked'></label>");
             action = 'active';

          } else {

		         //$('#load_data_message').html("<img src='imgs/loading.gif' class='loading'>");
             action = "inactive";
          }
      }
      });
    }

    if (action == 'inactive') {

      action = 'active';
      load_country_data(limit, start);

    }

    $(window).scroll(function() {

      if ($(window).scrollTop() + $(window).height() > $("#load_data").height() && action == 'inactive') {

        action = 'active';
        start = start + limit;

        setTimeout(function(){
        load_country_data(limit, start);
      }, 600);

      }
    });

  });
