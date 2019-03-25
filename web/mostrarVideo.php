<?php

use clases_pdo\funciones;
 if (isset($_GET) && !empty($_GET)) {
require_once('clases/funciones.php');
$resu = array();
        $id = $_GET['numero'];
       	$ins = new funciones();
        $result = $ins->video($id);
       }


?>

<html>
<head>
    <title>video</title>
</head>
<body>
	<div id="contenedor">
		<iframe src="<?php foreach($result as $video){
		                                 echo $video['UBICACION']; 
		                             } 
		?>" frameborder=0 width="100%" height="50%" scrolling=no allowfullscreen=allowfullscreen

		></iframe>
	</div>

</body>
</html>
