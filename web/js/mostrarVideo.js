$(document).ready(function(e) {
              
    $(".video").click(function() {
      var dato=$(this).attr('id') ;
      		$("#contenido").load('mostrarVideo.php?numero='+dato);
               
        });

    });
