<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Producto;
use Illuminate\Http\Request;


class ProductoController extends Controller
{

	public function index()
	{
		//return DB::table('productos')->get();

		//return "respondiendo de index";

		//$productos=Producto::all();

		/*
		$producto = new Producto();
		$producto->codigo="PP";
		$producto->nombre = "PRODUCTO DE PRUEBA";
		$producto->categoria = "COMESTIBLES";
		$producto->precio = 18.2;
		$producto->descripcion="Producto de prueba";
		$producto->ruta_imagen="";
		$producto->save();
		*/

		
		/*
		$producto = Producto::find(7);
		$producto->precio=11.99;
		$producto->save();
		*/

		/*$producto = Producto::find(8);
		$producto->delete();	
		*/

		//return view('productos.frmListaProductos',["productos"=>$productos]);


		$productos = Producto::all();

		return view("productos.frmListaProductos",["productos"=>$productos]);

	}




	public function show()
	{
		return view('productos.frmListaProductos');
	}

	public function create()
	{
		return view('productos.frmNuevoProducto');
	}


    public function store(Request $request)
	{

		$producto = new Producto();
		$producto->codigo=$request->txtCodigo;
		$producto->nombre=$request->txtNombre;
		$producto->categoria=$request->txtCategoria;
		$producto->precio=$request->txtPrecio;

		$producto->save();


		return "respusta de store";	
	}

}
