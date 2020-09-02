
  /* Botón Reset */

    $('#reset').attr('disabled', true);
    $('.input-reset').keyup(function (){

      if($(new_pass).val().length >= 8) {
        $('#reset').attr('disabled', false);
        $('#reset').addClass("btn-enable");

      } else {
          $('#reset').attr('disabled', true);
          $('#reset').removeClass("btn-enable");
        }
    })
