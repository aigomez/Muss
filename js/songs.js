$(document).ready(function() {

  // Si se hizo click para escuchar una segunda canción, elimina el reproductor anterior
    $('.play').click(function(){
      $('.player').remove();
    });

    // Cambia el boton y la fila seleccionada de negro a magenta (y viseversa)

    $('button').click(function() {
        $('button').not(this).css('color','#000000');
        $(this).css('color','#f03465');
    })

    // Reemplazo los generos por el 'icono de musica'
      $('.genero:contains("Rock")').html('<i class="fas fa-music"></i>');

      $('.genero:contains("Pop")').html('<i class="fas fa-music"></i>');

      $('.genero:contains("Cumbia")').html('<i class="fas fa-music"></i>');

      $('.genero:contains("Cyberpunk")').html('<i class="fas fa-music"></i>');

      $('.genero:contains("Japanese")').html('<i class="fas fa-music"></i>');

      $('.genero:contains("Chill")').html('<i class="fas fa-music"></i>');

      $('.genero:contains("Retro")').html('<i class="fas fa-music"></i>');

      $('.genero:contains("Metal")').html('<i class="fas fa-music"></i>');

});
