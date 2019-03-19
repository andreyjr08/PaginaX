<?php

use clases_pdo\funciones;
require 'clases/funciones.php';
$video = new funciones();
$result = $video ->video();
session_start();
?>


<html>
<head>
	<title></title>
</head>
<body>
<iframe src="<?php foreach($result as $video){
                    			 echo $video['UBICACION']; 
    						 } 
?>" frameborder=0 width="100%" height="100%" scrolling=no allowfullscreen=allowfullscreen

></iframe>

</body>
</html>