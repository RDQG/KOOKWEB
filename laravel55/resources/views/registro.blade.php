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
  {!! Form::open(array('route' => 'clientes.store','method'=>'POST')) !!}
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
              <h1 class="cursive-font">Registrate</h1> 
            </div>
          </div>  
  
        </div>
      </div>
    </div>
  </header>

  <div id="gtco-counter" class="gtco-section">
 	<div class="gtco-container">
 		<h2>REGISTRAR USUARIO</h2>
	
			<div class="row">
				
				
				<div class="col-md-6">
				 <div class="form-group">
		   		 	<label for="txtNombres">Nombres:</label>
				    <input type="text" class="form-control" id="txtNombres" name="txtNombres" placeholder="Juan Daniel">
				  </div>
				</div>

				<div class="col-md-6">
				 <div class="form-group">
		   		 	<label for="txtApellidos">Apellidos:</label>
				    <input type="text" class="form-control" id="txtApellidos" name="txtApellidos" placeholder="Perez">
				  </div>
				</div>

				<div class="col-md-12">
				 <div class="form-group">
		   		 	<label for="txtCorreo">Correo:</label>
				    <input type="email" class="form-control" id="txtCorreo" name="txtCorreo" placeholder="jperez@gmail.com">
				  </div>
				</div>

				<div class="col-md-6">
				 <div class="form-group">
		   		 	<label for="txtFechaNac">Fecha Nacimiento:</label>
				    <input type="date" class="form-control" id="txtFechaNac" name="txtFechaNac" placeholder="01/12/2000">
				  </div>
				</div>


				<div class="col-md-12">
				 <div class="form-group">
		   		 	<label for="txtLogin">Login:</label>
				    <input type="" class="form-control" id="txtLogin" name="txtLogin" placeholder="jperez">
				  </div>
				</div>


				<div class="col-md-6">
				 <div class="form-group">
		   		 	<label for="txtPassword">Contraseña:</label>
				    <input type="password" class="form-control" id="txtPassword" name="txtPassword" placeholder="">
				  </div>
				</div>


				<div class="col-md-6">
				 <div class="form-group">
		   		 	<label for="txtPassword1">Repetir Contraseña:</label>
				    <input type="password" class="form-control" id="txtPassword1" name="txtPassword1" placeholder="">
				  </div>
				</div>


				<div class="col-md-6">
				 
				 <button type="submit" class="btn btn-primary">Guardar</button>
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
{!! Form::close() !!}
</body>
</html>