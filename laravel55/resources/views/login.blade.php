<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/css/bootstrap-theme.css">
</head>
<body>


{!! Form::open(array('route' => 'autenticar','method'=>'POST')) !!}

<div class="container">
	
<div class="col-sm-6 col-sm-offset-3">
  <div class="panel panel-default">
   

		<div class="col-md-12">
		 <div class="form-group">
   		 	<label for="txtUser">Usuario:</label>
		    <input type="text" class="form-control" id="txtUser" name="txtUser" placeholder="">
		  </div>
		</div>

		<div class="col-md-12">
		 <div class="form-group">
   		 	<label for="txtPassword">Password:</label>
		    <input type="password" class="form-control" id="txtPassword" name="txtPassword" placeholder="">
		  </div>

  		</div>


  		<div class="col-md-12">
		 
		 <button type="submit" class="btn btn-primary">Autenticar</button>
		</div>
</div>


</div>

</div>

{!! Form::close() !!}

</body>
</html>