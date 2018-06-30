<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

use App\Producto;

class CarritoController extends Controller
{


	public function agregar_producto($idproducto,$cantidad)
	{

		$carrito=[];
		
		if(session("carrito"))
			$carrito=session("carrito");

		$producto=Producto::find($idproducto);
		$producto->cantidad=$cantidad;

		$ya_existe=false;
		foreach ($carrito as $prod_carrito) {
			
			if($prod_carrito->id==$producto->id)
			{
				$prod_carrito->cantidad=$prod_carrito->cantidad+$cantidad;
				$ya_existe=true;
				break;
			}
		}

		if(!$ya_existe)
		{	
			$carrito[]=	$producto;
		}	

		session(["carrito"=>$carrito]);


		return view("carrito.carrito");


	}


	public function limpiar_carrito()
	{
		session(["carrito"=>null]);

;	}

}