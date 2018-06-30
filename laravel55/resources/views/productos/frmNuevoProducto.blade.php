<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<h1>NUEVO PRODUCTO</h1>

<!--<form action="/productos" method="POST">-->
{!! Form::open(array('route' => 'productos.store','method'=>'POST')) !!}

<label>Código:</label>
<input type="text" name="txtCodigo">



<p>
 
<label>Nombre:</label>
<input type="text" name="txtNombre">

<p>

<label>Categoría:</label>
<input type="text" name="txtCategoria">

<p>

<label>Precio:</label>
<input type="text" name="txtPrecio">

<p>

<input type="submit" name="" value="Guardar">

<!--</form>-->
{!! Form::close() !!}

</body>
</html>