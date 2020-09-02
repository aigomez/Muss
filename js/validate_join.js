
  /* Botón Join */

  $('#join').attr('disabled', true);
  $('.input').keyup(function (){

    if($(email).val().length >= 6 && $(pass).val().length >= 8 && $(user).val().length >= 4) {

      $('#join').attr('disabled', false);
      $('#join').addClass("btn-enable");

    } else {
        $('#join').attr('disabled', true);
        $('#join').removeClass("btn-enable");
      }
  })

  /* Muestra advertencias cuando se selecciona el campo: email, pw, user */

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

    $('.char-user').hide();

    $('#user').focus(function() {
       $('.char-user').show();
    })

    $('#user').blur(function() {
       $('.char-user').hide();
    })
