<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Producto;
use Illuminate\Http\Request;


class HomeController extends Controller
{
	public function index()
	{

		$productos = Producto::all();
		return view("home",["productos"=>$productos]);
	}
}