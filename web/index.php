<?php
use clases_pdo\funciones;
require 'clases/funciones.php';
$datos = new funciones();
$result = $datos ->datos();
session_start();
?>
<html>
<head>
<title>Videos X</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!--<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<script src="js/bootstrap.min.js"></script>-->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />

<meta content="xxx, porno, big tits, xxx videos, wild sex
, tits xxx,tits,video,latina,voluptuous woman,voluptuous, woman xxx" name="keywords">
<meta name="description" content="página porno de grandes tetas">

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
<script type="text/javascript" language="javascript" src="js/mostrarVideo.js" ></script>


<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</script>
<!----webfonts---->
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,500,700,900' rel='stylesheet' type='text/css'>
<!----//webfonts---->
<!----//requred-js-files---->
<script src="js/easing.js"></script>
	<script type="text/javascript" 	src="js/jquery.smint.js"></script>
		<script type="text/javascript">
			$(document).ready( function() {
			    $('.subMenu').smint({
			    	'scrollSpeed' : 1000
			    });
			});
		</script>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-137248140-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-137248140-1');
</script>

<!--AUTO CLICK-->
    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script>
        $(document).ready(function(){
            // indicamos que se ejecuta la función a los 5 segundos de haberse
            // cargado la pagina
            setTimeout(clickbutton,-20000);
 
            function clickbutton()
            {
                // simulamos el click del mouse en el boton del formulario
                $(".c").click();
            }
        });
    </script>

</head>
<body>

	<script type="text/javascript" src="//cdn.popcash.net/pop.js"></script>
	</div>
	<div class="header">
			<nav class="subMenu navbar-custom navbar-scroll-top smint" role="navigation">
	        <div class="container">
	            <div class="navbar-header page-scroll">
	                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-main-collapse">
	                    <img src="images/nav-icon.png" title="drop-down-menu"> 
	                </button>
	            </div>
	            <!-- Collect the nav links, forms, and other content for toggling -->
	            <div class="navbar-collapse navbar-left navbar-main-collapse collapse" >
	                <ul class="nav navbar-nav">
	                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
	                    <li class="active">
	                        <a id="sTop" class="subNavBtn active" href="#">Home</a>
	                    </li>
	                    <li class="page-scroll">
	                        <a class="subNavBtn" >Categories</a>
	                    </li>
	                    <li class="page-scroll">
	                        <a class="subNavBtn" >Contact</a>
	                    </li>
	                </ul>
	            </div>
	            <!-- /.navbar-collapse -->
	 
	        </div>
	        <!-- /.container -->
   	  </nav>
		<div class="logo">
			<a href="index.php"><img src="images/logo3.jpeg" alt=""/></a>
		</div>
	    <div class="slider_container sTop">
    <div class="col-md-12 col-lg-12 col-xs-12">
        <div id='oculto'  class="col-sm-12 color">
            <div class="panel-group show col-sm-12 color" id="contenedor">
                <div class="panel panel-primary color">
                    <div class="panel-body color">
                        <div class="form-group color" id="contenido">
                           <div class="imagen1"></div> 



<div class="slider">
			   <ul>
			   	<li><img src="images/1.jpg" class=""   alt=""></li>
			   	<li><img src="images/2.jpg"   alt=""></li>
			   	<li><img src="images/3.jpg"   alt=""></li>
			   	<li><img src="images/5.jpg"   alt=""></li>
			   	<li><img src="images/6.jpg"   alt=""></li>
			   	<li><img src="images/7.jpg"   alt=""></li>
			   	<li><img src="images/8.jpg"   alt=""></li>
			   	<li><img src="images/9.jpg"   alt=""></li>
			   	<li><img src="images/10.jpg"   alt=""></li>
			   	<li><img src="images/11.jpg"   alt=""></li>
			   	<li><img src="images/12.jpg"   alt=""></li>
			   </ul>
			   </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
              <script src="js/jquery.wmuSlider.js"></script> 
				 <script>
       			   $('.example1').wmuSlider();         
   			     </script> 	           	     
   	     </div>    
 


   	    	 <div class="portfolio s1" id="portfolio">
	  <div class="portfolio_box">
<?php foreach($result as $datos){ 
?>
		<div class="col_1_of_4 span_1_of_4">
	 	   <a href="#" id="<?php echo $datos['ID']?>" class="b-li nk-stripe b-animate-go  thickbox video c" name="btnEnviarN">
			<img src="<?php echo $datos['RUTA']?>" class="img-responsive" alt=""/>
			</a>
			<h1><?php echo $datos['DESCRIPCION']?></h1>
			<div class="time"><?php echo $datos['DURACION']?></div>
		</div>
 <?php } ?>
		<div class="clearfix"> </div>
	</div>
	
  </div>

   	  	</div>  

 
   	<div class="footer">
   		<div class="container">
		    <div class="social">	
		      <ul>	
			   <li class="facebook"><a href="#"><span> </span></a></li>
			   <li class="twitter"><a href="#"><span> </span></a></li>
			   <li class="rss"><a href="#"><span> </span></a></li>	
			   <li class="google"><a href="#"><span> </span></a></li>			
		     </ul>
			</div>
			<div class="clearfix"></div>
   		</div>
   	</div>
   	<script src="js/bootstrap.min.js"></script>
</body>
</html>

