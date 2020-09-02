$(document).ready(function(){

  // Like button
  $(document).on('click', '.like', function(){

    var id = $(this).val();
    var $this = $(this);
    $this.toggleClass('like');
    $this.addClass("fas"); // Si no la añado aparece un cuadrado negro (indicando que no la tiene)

    if(!$this.hasClass('like')){

      // Si tiene la clase unlike, es porque ya esta likeada, entonces activo el corazón vacío y la clase unlike
      $( this ).toggleClass( "far" );
      $this.addClass("unlike");

    }
      $.ajax({
        type: "POST",
        url: "funciones_canciones/fun_like.php",
        async: false,
        data: {
          id: id,
          like: 1,
        },
      });
  });

  // Unlike button
  $(document).on('click', '.unlike', function(){

    var id = $(this).val();
    var $this = $(this);
    $this.toggleClass('unlike');
    $this.addClass("far");

    if(!$this.hasClass('unlike')){

      // Si tiene la clase like, es porque no esta likeada, entonces activo el corazón lleno y la clase like
      $( this ).toggleClass( "fas" );
      $this.addClass("like");

    }
      $.ajax({
        type: "POST",
        url: "funciones_canciones/fun_like.php",
        async: false,
        data: {
          id: id,
          like: 1,
        },
      });
  });

  // Play button
  $(document).on('click', '.play', function(){

    var id = $(this).val();
    var $this = $(this);

    $.ajax({
      url: 'funciones_canciones/fun_play.php',
      type: 'POST',
      async: false,
      data:{
        id: id,
        play: 1 // play = vendria siendo como un name en el if isset
      },

      success: function(response){
        $('#play'+id).html(response);
      }

    });
  });

});
