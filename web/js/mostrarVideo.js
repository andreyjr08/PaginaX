$(document).ready(function(e) {
              
    $("a").click(function() {
      var dato=$(this).attr('id') ;
               $("#contenido").load('mostrarVideo.php?numero='+dato);
               
        });

    });
