<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Representaciones PL</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/unslider.css">   
    <link rel="stylesheet" href="css/unslider-dots.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>

	
</head>
<body>
<div class="main-page">
  <header>
      <div class="container"> 
          <div class="navbar-info row">
              <div class="col-md-6">
              </div>
              <div class="col-md-6">
                 <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> 
                 <a href="contacto.php"><p>0241- 872 0230</p></a>
                 <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> 
                 <a href="contacto.php"><p>info@representacionespl.com.ve</p></a>
              </div>
              
              
          </div>
          <nav class="navbar navbar-default">
            <div class="container-fluid nav-margin">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand logo-nav" href="index.php"><img src="logo.png"><h2 class="logo-text">Representaciones PL</h2></a>
              </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active"><a href="index.php">INICIO</a></li>
                  <li><a href="nosotros.php">QUIENES SOMOS</a></li>
                  <li><a href="clientes.php">NUESTROS CLIENTES</a></li>
                  <li><a href="productos.php">PRODUCTOS</a></li>
                  <li><a href="servicios.php">SERVICIOS</a></li>
                  <li><a href="contacto.php">CONTACTO</a></li>            
                </ul>
              </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
          </nav>
          
      </div>
  </header>
  <?php include "slideshow.php" ?>
  <?php include "serviciosFront.php" ?>
  <?php include "map.php" ?>
  <?php include "footer.php" ?>
</div>

<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/unslider.js"></script>
<script src="js/main.js"></script>


<script>
  jQuery(document).ready(function($) {
    $('.my-slider').unslider();
  });
</script>
 

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
    e=o.createElement(i);r=o.getElementsByTagName(i)[0];
    e.src='https://www.google-analytics.com/analytics.js';
    r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X','auto');ga('send','pageview');
</script>
</body>
</html>