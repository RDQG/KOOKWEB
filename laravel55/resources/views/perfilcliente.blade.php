<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/css/bootstrap-theme.css">
</head>
<body>

{!! Form::open(array('route' => 'clientes.store','method'=>'POST')) !!}


<div class='container'>


<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/">KOOK</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="/">Home</a></li>
      <li><a href="#">Nosotros</a></li>
      <li><a href="/productos">Productos</a></li>
      <li><a href="#">Contatenos</a></li>

      <? if(!session("cliente")) 
          {
      ?>
      
      <li><a href="/registrar">Registrate</a></li>
      <li><a href="/login">Login</a></li>
      <?
        }

        else
        {
          ?>

        
        
        <li><a href="/perfilcliente"><?=(session("cliente")->login)?></a></li>
        <li><a href="/cerrarsesion">Cerra sesion</a></li>
          <?

        }
      ?>

    </ul>
  </div>
</nav>



<h1>PERFIL CLIENTE</h1>

	
	<div class="row">
		
		
		<div class="col-md-6">
		 <div class="form-group">
   		 	<label for="txtNombres">Nombres:</label>
		    <input type="text" class="form-control" id="txtNombres" name="txtNombres" placeholder="<?=(session("cliente")->nombres)?>" disabled>
		  </div>
		</div>

		<div class="col-md-6">
		 <div class="form-group">
   		 	<label for="txtApellidos">Apellidos:</label>
		    <input type="text" class="form-control" id="txtApellidos" name="txtApellidos" placeholder="<?=(session("cliente")->apellidos)?>" disabled>
		  </div>
		</div>

		<div class="col-md-12">
		 <div class="form-group">
   		 	<label for="txtCorreo">Correo:</label>
		    <input type="email" class="form-control" id="txtCorreo" name="txtCorreo" placeholder="<?=(session("cliente")->email)?>" disabled>
		  </div>
		</div>

		<div class="col-md-12">
		 <div class="form-group">
   		 	<label for="txtLogin">Login:</label>
		       <input type="email" class="form-control" id="txtCorreo" name="txtCorreo" placeholder="<?=(session("cliente")->login)?>" disabled>
		  </div>
		</div>

	</div>

</div>


{!! Form::close() !!}

</body>
</html>