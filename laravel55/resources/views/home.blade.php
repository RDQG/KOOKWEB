<!DOCTYPE HTML>
<!--
  Aesthetic by gettemplates.co
  Twitter: http://twitter.com/gettemplateco
  URL: http://gettemplates.co
-->
<html>
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Kookhyo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Free HTML5 Website Template by GetTemplates.co" />
  <meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
  <meta name="author" content="GetTemplates.co" />

    <!-- Facebook and Twitter integration -->
  <meta property="og:title" content=""/>
  <meta property="og:image" content=""/>
  <meta property="og:url" content=""/>
  <meta property="og:site_name" content=""/>
  <meta property="og:description" content=""/>
  <meta name="twitter:title" content="" />
  <meta name="twitter:image" content="" />
  <meta name="twitter:url" content="" />
  <meta name="twitter:card" content="" />

  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
  
  <!-- Animate.css -->
  <link rel="stylesheet" href="css/animate.css">
  <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="css/icomoon.css">
  <!-- Themify Icons-->
  <link rel="stylesheet" href="css/themify-icons.css">
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="css/bootstrap.css">

  <!-- Magnific Popup -->
  <link rel="stylesheet" href="css/magnific-popup.css">

  <!-- Bootstrap DateTimePicker -->
  <link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">



  <!-- Owl Carousel  -->
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <!-- Theme style  -->
  <link rel="stylesheet" href="css/style.css">

  <!-- Modernizr JS -->
  <script src="js/modernizr-2.6.2.min.js"></script>
  <!-- FOR IE9 below -->
  <!--[if lt IE 9]>
  <script src="js/respond.min.js"></script>
  <![endif]-->

  </head>
  <body>
    
  <div class="gtco-loader"></div>
  
  <div id="page">

  
  <!-- <div class="page-inner"> -->
  <nav class="gtco-nav" role="navigation">
    <div class="gtco-container">
      
      <div class="row">
        <div class="col-sm-4 col-xs-12">
          <div id="gtco-logo"><a href="/">kook <em>.</em></a></div>
        </div>
        <div class="col-xs-8 text-right menu-1">
          <ul>
              <li><a href="Nosotros.html">Nosotros</a></li>
              <li class="has-dropdown">
                <a href="/productos">Productos</a>
              </li>
              <li><a href="contact.html">Contactanos</a></li>
              <? if(!session("cliente")) 
                  {
              ?>
              <li><a href="/registrar">Registrate</a></li>
              <li class="btn-cta"><a href="/login"><span>LOGIN</span></li>
              <?
                }
                else
                {
                  ?>
                <li><a href="/carrito">Carrito</a></li>
                <li><a href="/perfilcliente"><?=(session("cliente")->login)?></a></li>
                <li><a href="/cerrarsesion">Cerra sesion</a></li>
                  <?
                }
              ?>
          </ul> 
        </div>
      </div>
    </div>  
  </nav>
  </nav>
  <header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(images/HEADER.jpg)" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="gtco-container">
      <div class="row">
        <div class="col-md-12 col-md-offset-0 text-left">
          

          <div class="row row-mt-15em">
            <div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
              <h1 class="cursive-font">Todo de buen gusto!</h1> 
            </div>
          </div>  
  
        </div>
      </div>
    </div>
  </header>


  <div class="gtco-section">
    <div class="gtco-container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
          <h2 class="cursive-font primary-color">Productos</h2>
        </div>
      </div>
      <div class="row">

        <?


      foreach ($productos as $producto) {
        	
        echo "<div class='col-lg-4' 'col-md-4' 'col-sm-6'>";
        	echo "<a class='fh5co-card-item' 'image-popup' href='".$producto->ruta_imagen."'>";
            echo "<figure>";
              echo "<div class='overlay'><i class='ti-plus'></i></div>";
              echo "<img src='".$producto->ruta_imagen."' alt='Image' class='img-responsive'>";
            echo "</figure>";
            echo "<div class='fh5co-text'>";
              echo "<h2>".$producto->nombre."</h2>";
        		  echo "<p><span class='price cursive-font'>".'S/ '.$producto->precio."</span></p>";
            echo "</div>";
          echo "<a class='btn-cta' href='/carrito/comprar/".$producto->id."/1'>Comprar</a>";
          echo "</a>";
        echo "</div>";
        }
        ?>

      </div>
    </div>
  </div>
  <div id="gtco-features">
    <div class="gtco-container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
          <h2 class="cursive-font">Que ofrecemos</h2>
          <p>Brindamos la mejor atención, para un cliente satisfecho.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-6">
          <div class="feature-center animate-box" data-animate-effect="fadeIn">
            <span class="icon">
              <i class="ti-face-smile"></i>
            </span>
            <h3>Clientes Felices</h3>
            <p>"Barriga llena corazón contento"</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="feature-center animate-box" data-animate-effect="fadeIn">
            <span class="icon">
              <i class="ti-thought"></i>
            </span>
            <h3>Creatividad Culinaria</h3>
            <p>"Nuestos chef ingenian nuevas recetas exquisitas"</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="feature-center animate-box" data-animate-effect="fadeIn">
            <span class="icon">
              <i class="ti-truck"></i>
            </span>
            <h3>Delivery</h3>
            <p>"Realizamos servicio de delivey"</p>
          </div>
        </div>
        

      </div>
    </div>
  </div>


  <div class="gtco-cover gtco-cover-sm" style="background-image: url(images/frasefondo.jpg)"  data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="gtco-container text-center">
      <div class="display-t">
        <div class="display-tc">
          <h1>&ldquo; El Cocinero sin probar bocado de los manjares que ha hecho, suele quedar satisfecho de solo haberlos guisado&rdquo;</h1>
        </div>  
      </div>
    </div>
  </div>

  <div id="gtco-counter" class="gtco-section">
    <div class="gtco-container">

      <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
          <h2 class="cursive-font primary-color">Opiniones de Nuestros clientes</h2>
          <p>Nuestros clientes opinan acerca de nuestra deliciosa sazón.</p>
        </div>
      </div>

      <div class="row">
        
        <div class="col-md-7 col-sm-6 animate-box" data-animate-effect="fadeInUp">
          <div class="feature-center">
            <span class="counter-label">La comida es excelente, <br>y la antención muy buena.</span>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
          <div class="feature-center">
            <span class="counter-label">Felicito al chef por su excelente labor.</span>
          </div>
        </div>
      </div>
    </div>
  </div>


  <footer id="gtco-footer" role="contentinfo" style="background-image: url(images/img_bg_1.jpg)" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="gtco-container">
      <div class="row row-pb-md">

        

        
        <div class="col-md-12 text-center">
          <div class="gtco-widget">
            <h3>Estar en Contacto</h3>
            <ul class="gtco-quick-contact">
              <li><a href="#"><i class="icon-phone"></i> +51-995-509-557</a></li>
              <li><a href="#"><i class="icon-mail2"></i> kook.contancto@gmail.com</a></li>
              <li><a href="#"><i class="icon-address"></i> Calles los Quinuales Nro 120 – Huancayo</a></li>
            </ul>
          </div>
          <div class="gtco-widget">
            <h3>Redes Sociales</h3>
            <ul class="gtco-social-icons">
              <li><a href="#"><i class="icon-facebook"></i></a></li>
              <li><a href="#"><i class="icon-google"></i></a></li>
              <li><a href="#"><i class="icon-youtube"></i></a></li>
            </ul>
          </div>
        </div>

        <div class="col-md-12 text-center copyright">
          <p><small class="block"> ©2018 KookRestaurant. Todos los derechos reservados.</small> 
        </div>

      </div>

      

    </div>
  </footer>
  <!-- </div> -->

  </div>

  <div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
  </div>
  
  <!-- jQuery -->
  <script src="js/jquery.min.js"></script>
  <!-- jQuery Easing -->
  <script src="js/jquery.easing.1.3.js"></script>
  <!-- Bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <!-- Waypoints -->
  <script src="js/jquery.waypoints.min.js"></script>
  <!-- Carousel -->
  <script src="js/owl.carousel.min.js"></script>
  <!-- countTo -->
  <script src="js/jquery.countTo.js"></script>

  <!-- Stellar Parallax -->
  <script src="js/jquery.stellar.min.js"></script>

  <!-- Magnific Popup -->
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/magnific-popup-options.js"></script>
  
  <script src="js/moment.min.js"></script>
  <script src="js/bootstrap-datetimepicker.min.js"></script>


  <!-- Main -->
  <script src="js/main.js"></script>

  </body>
</html>

