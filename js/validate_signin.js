
  /* Muestra advertencias cuando se selecciona el campo: email, pw */

    $('#email').focus(function() { // focus = entrar al input email
      $('.char-email').show();
    })

    $('#email').blur(function() { // blur = salir del input email
        $('.char-email').hide();
    })

    $('.char-pass').hide();

    $('#pass').focus(function() {
       $('.char-pass').show();
    })

    $('#pass').blur(function() {
       $('.char-pass').hide();
    })

  /* Botón Sign In: Se deshabilita y se sólo habilita cuando el sea email >= 6, la pw >= 8 caracteres */

    $('#signin').attr('disabled', true); // Apenas carga la página, deshabilito el botón
    $('.input').keyup(function (){ // Accedo a la clase input

      if($(email).val().length >= 4 && $(pass).val().length >= 8) { // Accedo a los IDs email y pass, además de establecer las condiciones

        $('#signin').attr('disabled', false);
        $('#signin').addClass("btn-enable");

      } else {
          $('#signin').attr('disabled', true);
          $('#signin').removeClass("btn-enable");
        }
    })

  /* Botón Can't sign in?: Si el campo email tiene menos de 6 caracteres, el botón deshabilita su función de envío e informa al usuario  */

    $('.required').hide();

    $("#Forgot").click(function() {

      if($(email).val().length <= 6) {

        event.preventDefault();

        $(".required").fadeIn();
        $(".required").delay(1000).fadeOut();

        $("#email").css("border", "solid 1px #c61212").fadeIn();

        setTimeout(function(){
          $("#email").css("border", "solid 0px #c61212");
        }, 1400);

      }
    })
