<!DOCTYPE html>
<html>
<head>
	<title></title>


	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/css/bootstrap-theme.css">

	<link rel="stylesheet" href="css/my-slider.css"/>
	<script src="js/ism-2.2.min.js"></script>

</head>
<body>





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





<table class="table">

<thead>
<td>Nombre</td>
<td>Cantidad</td>
<td>Precio</td>
<td>Subtotal</td>
</thead>

<?php

$carrito=session("carrito");

foreach ($carrito as $producto) {

	echo "<tr>";
	
	echo "<td>".$producto->nombre."</td>";
	echo "<td>".$producto->cantidad."</td>";
	echo "<td>".$producto->precio."</td>";
	echo "<td>".$producto->cantidad*$producto->precio."</td>";
	echo "</tr>";
}


?>	


</table>

</body>
</html>